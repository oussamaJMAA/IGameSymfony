<?php

namespace App\Controller;

use App\Entity\Game;
use App\Form\GameType;
use App\Repository\GameRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;




/**
 * @Route("/game")
 */
class GameController extends AbstractController
{
    /**
     * @Route("/", name="app_game_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $games = $entityManager
            ->getRepository(Game::class)
            ->findAll();

        return $this->render('game/index.html.twig', [
            'games' => $games,
        ]);
    }

    /**
     * @Route("/new", name="app_game_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $game = new Game();
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($game);
            $entityManager->flush();

            return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('game/new.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{gameId}", name="app_game_show", methods={"GET"})
     */
    public function show(Game $game): Response
    {
        return $this->render('game/show.html.twig', [
            'game' => $game,
        ]);
    }

    /**
     * @Route("/{gameId}/edit", name="app_game_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Game $game, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('game/edit.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{gameId}", name="app_game_delete", methods={"POST"})
     */
    public function delete(Request $request, Game $game, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$game->getGameId(), $request->request->get('_token'))) {
            $entityManager->remove($game);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/searchG", name="searchG", methods={"GET"})
     */
    public function searchG(Request $request, NormalizerInterface $Normalizer, PaginatorInterface $paginator)
    {
        $gamess=$paginator->paginate(
            $this->getDoctrine()->getRepository(game::class)->findBy(['game_name' => $request->get('search')]),
            $request->query->getInt('page',1),
            4

        );
        dump($request->get('search'));
        if (null != $request->get('search')) {
            return $this->render('/game/list.html.twig', [
                'games' => $games
                //,'user'=>$this->getUser(),
            ]);
        }
    }
    /**
     * @Route("/orderBYName", name="orderbyName", methods={"GET"})
     */
    public function orderbyNameGame(gameRepository  $gameRepository, PaginatorInterface $paginator, Request $request ): Response
    {

        $games = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\game p order by  p.game_name asc')
            ->getResult();
        $game=$paginator->paginate(
            $games,
            $request->query->getInt('page',1),
            2

        );


        return $this->render('game/list.html.twig', [
            'games' => $game
           // ,'user'=>$this->getUser()

        ]);

        /**
         * @Route("/game/game1/barchart", name="barchart")
         */
        public function barchart()
    {

        $products = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Game p order by p.nbr_vu desc')
            ->setMaxResults(5)
            ->getResult();

        $em = $this->getDoctrine()->getManager();

        $col = new ColumnChart();
        foreach ($games as $p) {

            $data[]=array($p ->getGame_name(), $p->getNbrVu());

        }
        $col->getData()->setArrayToDataTable([
            ['nom jeu','nombre de vu'],
            [$data[0][0],$data[0][1]],
            [$data[1][0],$data[1][1]],
            [$data[2][0],$data[2][1]],
            [$data[3][0],$data[3][1]],
            [$data[4][0],$data[4][1]],

        ]);
        $col->getOptions()->setTitle('les games les plus vues');
        $col->getOptions()->getAnnotations()->setAlwaysOutside(true);
        $col->getOptions()->getAnnotations()->getTextStyle()->setFontSize(14);
        $col->getOptions()->getAnnotations()->getTextStyle()->setColor('#000');
        $col->getOptions()->getAnnotations()->getTextStyle()->setAuraColor('none');
        $col->getOptions()->getHAxis()->setTitle('Produits');
        $col->getOptions()->getVAxis()->setTitle('Nombre de vue');
        $col->getOptions()->setWidth(900);
        $col->getOptions()->setHeight(500);
        dump($data[1][0]);
        return $this->render('game/statgameback.html.twig', array('barchart' => $col, 'user'=>$this->getUser(),));
    }

    }


}
