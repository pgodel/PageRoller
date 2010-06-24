<?php

namespace Application\PageRollerBundle\Documents;

/**
 * Description of Url
 *
 * @author pgodel
 */
/** @Document(collection="urls")  */
class Url
{

 /** @Id */
  private $id;

  /** @String */
  private $name;

  /** @String */
  private $url;

  public function __construct()
  {
  }

  public function __toString()
  {
    return $this->url;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }




}
