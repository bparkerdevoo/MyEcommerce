<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * CommentPost
 *
 * @ORM\Table(name="comment_post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentPostRepository")
 */
class CommentPost
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BlogPost", inversedBy="CommentPost")
     */
    private $id_BlogPost;

    public function setId_BlogPost(BlogPost $id_BlogPost)
    {
        $this->id_BlogPost = $id_BlogPost;
    }

    public function getId_BlogPost()
    {
        return $this->id_BlogPost;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="text")
     */
    private $avis;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set body.
     *
     * @param string $body
     *
     * @return CommentPost
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }


    /**
     * Set avis.
     *
     * @param string $avis
     *
     * @return CommentPost
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis.
     *
     * @return string
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set idBlogPost.
     *
     * @param \AppBundle\Entity\BlogPost|null $idBlogPost
     *
     * @return CommentPost
     */
    public function setIdBlogPost(\AppBundle\Entity\BlogPost $idBlogPost = null)
    {
        $this->id_BlogPost = $idBlogPost;

        return $this;
    }

    /**
     * Get idBlogPost.
     *
     * @return \AppBundle\Entity\BlogPost|null
     */
    public function getIdBlogPost()
    {
        return $this->id_BlogPost;
    }
}
