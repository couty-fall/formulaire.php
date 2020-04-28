<?php
namespace OCFram;
class Form extends Personne
{
  protected $personne;
  protected $fields = [];
  
  public function __construct(Personne $personne)
  {
    $this->setPersonne($personne);
  }
  
  public function add(Field $field)
  {
    $attr = $field->name(); 
    $field->setValue($this->personne->$attr()); 
    
    $this->fields[] = $field; 
    return $this;
  }
  
  public function createView()
  {
    $view = '';
    
    foreach ($this->fields as $field)
    {
      $view .= $field->buildWidget().'<br />';
    }
    
    return $view;
  }
  
  public function isValid()
  {
    $valid = true;
    
    foreach ($this->fields as $field)
    {
      if (!$field->isValid())
      {
        $valid = false;
      }
    }
    
    return $valid;
  }
  
  public function personne()
  {
    return $this->personne;
  }
  
  public function setPersonne(Personne $personne)
  {
    $this->personne = $personne;
  }
}
    
}
?>