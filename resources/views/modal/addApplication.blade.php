<!-- Modal -->
<div class="modal fade" id="addApplicationModal" tabindex="-1" aria-labelledby="addApplicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl ">
      <div class="modal-content">
        <div class="modal-header">
            <div class="container">
                <div class="row text-center">
                    <h3>Создание заявки</h3>
                </div>
            </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form id='addApplicationForm'>
                    <div class='row'>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                            Местоположение
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                            <input class="form-control" type="text" name="location" id="suggest" class="input" placeholder="Введите адрес">
                            <p id="notice"></p>
                            <div id="map"></div>
                            <div id="messageHeader" class="text-info"></div>
                            <div id="message" class="text-danger"></div>
                            <input type="text" name="coordinate_x" id='coordinate-x' class="hiden">
                            <input type="text" name="coordinate_y" id='coordinate-y' class="hiden">
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                            Какой тип скважины Вас интересует? (<a href="#">Подробнее</a>)
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                            @foreach ($filtersTypeBoreholes as $item)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type_boreholes" id="type_boreholes{{ $item->id }}" value="{{ $item->name }}">
                                    <label class="form-check-label" for="type_boreholes{{ $item->id }}">{{ $item->name }}</label>
                                </div>
                            @endforeach

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type_boreholes" id="type_boreholesALL" value="Все варианты">
                                <label class="form-check-label" for="type_boreholesALL">Все варианты</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                            Конструкция труб скважины (<a href="#">Подробнее</a>)
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                            @foreach ($filtersConstructionBoreholePipes as $item)
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="construction_borehole_pipes" id="construction_borehole_pipes{{ $item->id }}" value="{{ $item->name }}">
                                  <label class="form-check-label" for="construction_borehole_pipes{{ $item->id }}">{{ $item->name}}</label>
                              </div>
                            @endforeach
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="construction_borehole_pipes" id="construction_borehole_pipesAll" value="Все варианты">
                                <label class="form-check-label" for="construction_borehole_pipesAll">Все варианты</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                            Какая техника заедет? (<a href="#">Подробнее</a>)
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                            @foreach ($filtersEquipment as $item)
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="equipment" id="equipment{{ $item->id }}" value="{{ $item->name }}">
                                  <label class="form-check-label" for="equipment{{ $item->id }}">{{ $item->name}}</label>
                              </div>
                            @endforeach
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="equipment" id="equipmentAll" value="Все варианты">
                                <label class="form-check-label" for="equipmentAll">Все варианты</label>
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                            С какой даты Вы готовы к проведению работ? 
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                                <input class="form-control" type="date" name="date_start" id="date_start" style="max-width: 150px;">
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                            Какой вариант материала? (<a href="#">Подробнее</a>)
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                            @foreach ($filtersMaterial as $item)
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="material" id="material{{ $item->id }}" value="{{ $item->name }}">
                                  <label class="form-check-label" for="material{{ $item->id }}">{{ $item->name}}</label>
                              </div>
                            @endforeach
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="material" id="materialAll" value="Все варианты">
                                <label class="form-check-label" for="materialAll">Все варианты</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                            Желаемый бюджет: до
                            <div class="form-text">Не обязательно *</div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                            <div class="mb-3">
                                <input type="number" class="form-control" name='acceptable_price' id="acceptable_price" placeholder="">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                            Комментарий
                            <div class="form-text">Не обязательно *</div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                            <div class="mb-3">
                                <textarea class="form-control" name='comment' id="comment" rows="3"></textarea>
                              </div>
                        </div>
                    </div>
                </form>
                <hr>
                <br>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-primary button-width-middle" id="addApplication-send">Добавить</button>
                </div>
                <br>
            </div>
        </div>

      </div>
    </div>
  </div>