<?php

namespace App\Presenters\Sistema;
use App\Presenters\Presenter;
use App\Services\Imagen;

class SistemaPresenter extends Presenter
{
  private $folderImg = 'cp_images/config';
  private $imgLogo = "images/cronoprof2.svg";
  private $imgLogin = "images/fondo.jpg";
  private $imgCom = "images/community.svg";

  public function getLogo() {
    return (new Imagen($this->model->assets['logo'] ?? null, $this->folderImg, $this->imgLogo))->call();
  }

  public function getBackgroundLogin() {
    return (new Imagen($this->model->assets['background'] ?? null, $this->folderImg, $this->imgLogin))->call();
  }

  public function getLogoComunity() {
    return (new Imagen($this->model->assets['background_c'] ?? null, $this->folderImg, $this->imgCom))->call();
  }


}
