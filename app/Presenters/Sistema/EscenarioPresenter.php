<?php

namespace App\Presenters\Sistema;
use App\Presenters\Presenter;
use App\Services\Currency;
use App\Services\Imagen;

class EscenarioPresenter extends Presenter
{
  private $folderImg = 'cp_images/config';
  private $imgLogo = "images/cronoprof2.svg";
  private $imgLogin = "images/fondo.jpg";
  private $imgCom = "images/community.svg";

  const IMG_RANDOM = [
    'pexels-ákos-szabó-440731.jpg',
    'pexels-bri-schneiter-346529.jpg',
    'pexels-ian-turnell-709552.jpg',
    'pexels-james-wheeler-417074.jpg',
    'pexels-joyston-judah-933054.jpg',
    'pexels-maria-isabella-bernotti-1049298.jpg',
    'pexels-nextvoyage-1476880.jpg',
    'pexels-peter-de-vink-975012.jpg',
    'pexels-pixabay-46160.jpg',
    'pexels-pixabay-158279.jpg',
    'pexels-stephan-seeber-1261728.jpg',
    'pexels-ian-beckley-2440024.jpg'
  ];

  public function getLogo() {
    return (new Imagen($this->model->assets['logo'] ?? null, $this->folderImg, $this->imgLogo))->call();
  }

  public function getLogoRandom() {
    return (new Imagen($this->model->assets['logo'] ?? null, $this->folderImg, 'images/escenarios/'. self::IMG_RANDOM[rand(0,11)]))->call();
  }

  public function getPrincig() {
    $price = $this->model->info['normal_price'] ?? 0;
    return [$price,  Currency::getConvert($price)];
  }

  public function getPrincigBono() {
    $price = $this->model->info['bono_price'] ?? 0;
    return [$price,  Currency::getConvert($price)];
  }

  // public function getBackgroundLogin() {
  //   return (new Imagen($this->model->assets['background'] ?? null, $this->folderImg, $this->imgLogin))->call();
  // }

  // public function getLogoComunity() {
  //   return (new Imagen($this->model->assets['background_c'] ?? null, $this->folderImg, $this->imgCom))->call();
  // }

}
