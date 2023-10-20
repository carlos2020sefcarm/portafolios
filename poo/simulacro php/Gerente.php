<?php

Class Gerente {

private $cargo;


public function getCargo()
{
return $this->cargo;
}

public function setCargo($cargo): self
{
$this->cargo = $cargo;

return $this;
}
}


?>