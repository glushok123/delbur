<div class='row bg-white filter g-1 justify-content-center text-center'
style="
    position: relative;

    top: 35px;
"
>

    <div class='col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  align-items-stretch'>
        <div class="form-floating">
            <select class="form-select border-left filters-change" id="filtersTypeBoreholes" aria-label="Floating label select example">
              <option selected value=''>Не выбрана</option>
              @foreach ($filtersTypeBoreholes as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
              @endforeach
            </select>
            <label for="filtersTypeBoreholes">Тип скважины</label>
          </div>
    </div>

    <div class='col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2  align-items-stretch'>
        <div class="form-floating">
            <select class="form-select filters-change" id="filtersConstructionBoreholePipes" aria-label="Floating label select example">
              <option selected value=''>Не выбрана</option>
              @foreach ($filtersConstructionBoreholePipes as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
              @endforeach
            </select>
            <label for="filtersConstructionBoreholePipes">Конструкция труб</label>
          </div>
    </div>

    <div class='col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2  align-items-stretch'>
        <div class="form-floating">
            <select class="form-select filters-change" id="filtersEquipment" aria-label="Floating label select example">
              <option selected value=''>Не выбрана</option>
              @foreach ($filtersEquipment as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
              @endforeach
            </select>
            <label for="filtersEquipment">Техника</label>
          </div>
    </div>

    <div class='col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  align-items-stretch'>
        <div class="form-floating">
            <select class="form-select filters-change border-right" id="filtersMaterial" aria-label="Floating label select example">
              <option selected value=''>Не выбрана</option>
              @foreach ($filtersMaterial as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
              @endforeach
            </select>
            <label for="filtersMaterial">Материал</label>
          </div>
    </div>

    <!--div class='col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2  align-items-stretch'>
        <div class="form-floating">
            <input type="number" class="form-control border-right filters-change" id="filtersPriceValueMax" placeholder="name@example.com">
            <label for="filtersPriceValueMax">Цена до</label>
        </div>
    </div-->

    <div class='col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 d-flex align-items-stretch justify-content-center text-center'>
        <button type="button" class="btn  button-show-custom"><a href="/" style='color:white; text-decoration: none;'> Сбросить фильтр</a></button>
    </div>
</div>