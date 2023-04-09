<?php

namespace App\Presenters\Sistema;
use App\Presenters\Presenter;
use App\Services\Imagen;

class ActividadPresenter extends Presenter
{
  public function getColor() {
    return $this->model->config['background'] ?? '';
  }

}
