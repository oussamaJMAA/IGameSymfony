<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category", uniqueConstraints={@ORM\UniqueConstraint(name="category_name", columns={"category_name"})})
 * @ORM\Entity
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=30, nullable=false)
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_imgUrl", type="string", length=50, nullable=false)
     */
    private $categoryImgurl;

    /**
     * @var string
     *
     * @ORM\Column(name="category_addDate", type="string", length=20, nullable=false)
     */
    private $categoryAdddate;

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName): self
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    public function getCategoryImgurl(): ?string
    {
        return $this->categoryImgurl;
    }

    public function setCategoryImgurl(string $categoryImgurl): self
    {
        $this->categoryImgurl = $categoryImgurl;

        return $this;
    }

    public function getCategoryAdddate(): ?string
    {
        return $this->categoryAdddate;
    }

    public function setCategoryAdddate(string $categoryAdddate): self
    {
        $this->categoryAdddate = $categoryAdddate;

        return $this;
    }


}
