<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_equipe", columns={"equipe"})})
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
 */
class User implements UserInterface
{
    /**
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *  @Groups ("post: read")
     */
    private $id;

    /**
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     *  @Groups ("post: read")
     */
    private $firstname;

    /**
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     *  @Groups ("post: read")
     */
    private $lastname;

    /**
     
     
     * @ORM\Column(name="username", type="string", length=255, nullable=false , unique=true)
     * @Assert\NotBlank()
     *  @Groups ("post: read")
     */
    private $username;

    /**
     * 
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false , unique= true)
     *   @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     * @Assert\NotBlank()
     *  @Groups ("post: read")
     */
    private $email;

    
   
    /**
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     *@Assert\NotBlank()
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     *  @Groups ("post: read")
     */
    private $gender;

    /**
     * @ORM\Column(type="json")
     *  @Groups ("post: read")
     */
    private $roles = [];

    /**
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=true)
     *  @Groups ("post: read")
     */
    private $address;

    /**
     *
     * @ORM\Column(name="phone", type="integer", nullable=true)
     *  @Groups ("post: read")
     */

    private $phone;

    /**
     *
     * @ORM\Column(name="nationality", type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @var \DateTime
     * @Gedmo\Mapping\Annotation\Timestampable(on="create")
     * @Doctrine\ORM\Mapping\Column(type="datetime",options={"default": "CURRENT_TIMESTAMP"})
     * 
     */
    private $createdAt;

    /**
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     * @Groups ("post: read")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe", referencedColumnName="id")
     * })
     */
    private $equipe;

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=Message::class, mappedBy="sender", orphanRemoval=true)
     */
    private $sent;

    /**
     * @ORM\OneToMany(targetEntity=Message::class, mappedBy="recipient", orphanRemoval=true)
     */
    private $recieved;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $unreadM;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isSocial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="user",orphanRemoval=true)
     */
    private $commandes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $JavaPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password2;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="user")
     */
    private $comments;

   

    public function __construct()
    {
        $this->sent = new ArrayCollection();
        $this->recieved = new ArrayCollection();
        $this->commandes = new ArrayCollection();
        $this->games = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }
   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(?int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getCreatedAt():?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }
    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
      //  $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getIsVerified(): ?bool
    {
        return $this->isVerified;
    }
   

    /**
     * @return Collection<int, Message>
     */
    public function getSent(): Collection
    {
        return $this->sent;
    }

    public function addSent(Message $sent): self
    {
        if (!$this->sent->contains($sent)) {
            $this->sent[] = $sent;
            $sent->setSender($this);
        }

        return $this;
    }

    public function removeSent(Message $sent): self
    {
        if ($this->sent->removeElement($sent)) {
            // set the owning side to null (unless already changed)
            if ($sent->getSender() === $this) {
                $sent->setSender(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getRecieved(): Collection
    {
        return $this->recieved;
    }

    public function addRecieved(Message $recieved): self
    {
        if (!$this->recieved->contains($recieved)) {
            $this->recieved[] = $recieved;
            $recieved->setRecipient($this);
        }

        return $this;
    }

    public function removeRecieved(Message $recieved): self
    {
        if ($this->recieved->removeElement($recieved)) {
            // set the owning side to null (unless already changed)
            if ($recieved->getRecipient() === $this) {
                $recieved->setRecipient(null);
            }
        }

        return $this;
    }

    public function getUnreadM(): ?int
    {
        return $this->unreadM;
    }

    public function setUnreadM(?int $unreadM): self
    {
        $this->unreadM = $unreadM;

        return $this;
    }

    

    public function getLastLogin(): ?\DateTime
    {
        return $this->lastLogin;
    }

    public function setLastLogin(\DateTime $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getIsSocial(): ?bool
    {
        return $this->isSocial;
    }

    public function setIsSocial(?bool $isSocial): self
    {
        $this->isSocial = $isSocial;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setUser($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getUser() === $this) {
                $commande->setUser(null);
            }
        }

        return $this;
    }

    public function getJavaPassword(): ?string
    {
        return $this->JavaPassword;
    }

    public function setJavaPassword(?string $JavaPassword): self
    {
        $this->JavaPassword = $JavaPassword;

        return $this;
    }

    public function getPassword2(): ?string
    {
        return $this->password2;
    }

    public function setPassword2(?string $password2): self
    {
        $this->password2 = $password2;

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setUser($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }

    
   


}
