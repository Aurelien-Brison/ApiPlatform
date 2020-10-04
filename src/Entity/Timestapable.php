<?php 

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;


trait Timestapable
{
    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime")
     * @Groups({"user_read", "user_details_read", "article_details_read", "article_read"})
     */
    private \DateTimeInterface $createdAt;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"user_read", "user_details_read", "article_details_read", "article_read"})
     */
    private $updatedAt;

    /**
     * Get the value of createdAt
     *
     * @return  \DateTimeInterface
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get the value of updatedAt
     *
     * @return  \DateTimeInterface
     */ 
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param  \DateTimeInterface  $updatedAt
     *
     * @return  self
     */ 
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}