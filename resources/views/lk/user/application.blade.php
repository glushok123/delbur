<div class='row row-margin-middle'>
    <button type="button" class="btn btn-primary button-width-middle" data-bs-toggle="modal" data-bs-target="#addApplicationModal">Добавить заявку</button>
</div>
<hr>

<div id='grid-product'>
    @foreach ($applications as $item)

        <div class='row bg-white cart-custom'>
            <div class='col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 '>
                <div class="row header-card-custom g-2">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-nowrap">
                        <h5>Заявка #{{ $item->id }}</h5>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-nowrap">
                        <span class="text-muted">Добавлено {{ \Carbon\Carbon::parse($item->created_at)->format('d.m.Y') }}</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-nowrap">
                        <span class="text-success">Статус "Активна"{{-- $item->warranty --}}</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-nowrap">
                        <span class="text-primary">Предложений: 0</span>
                    </div>
                </div>
                <hr>
                <div class="row before-header-card-custom">
                    <div class="accordion accordion-preview no-border" id="accordionExample">
                        <div class="accordion-item no-border">
                        <h5>Описание:</h5>
                        <div id="collapseThree{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="headingThree{{ $item->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body" >
                                <div class="row">
                                    <label><b>Местоположение:</b> {{ $item->location }}</label>
                                    <label><b>Тип скважины:</b> {{ $item->type_boreholes }}</label>
                                    <label><b>Конструкция труб скважины:</b> {{ $item->construction_borehole_pipes }}</label>
                                    <label><b>Какая техника заедет:</b> {{ $item->equipment }}</label>
                                    <label><b>Дата начала проведения работ:</b> {{ \Carbon\Carbon::parse($item->date_start)->format('d.m.Y') }}</label>
                                    <label><b>Материал:</b> {{ $item->material }}</label>
                                    <label><b>Желаемый бюджет: до </b> {{ $item->acceptable_price }}</label>
                                    <label><b>Комментарий:</b> {{ $item->comment }}</label>
                                </div>
                            </div>
                        </div>
                        <h2 class="accordion-header" id="headingThree{{ $item->id }}">
                            <span class=" collapsed text-primary dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree{{ $item->id }}" aria-expanded="false" aria-controls="collapseThree{{ $item->id }}"
                                style='
                                    border-bottom: 1px dashed #000080; /* Добавляем свою линию */ 
                                    font-size: 16px;
                                '>
                                Показать полностью
                            </span>
                        </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 align-items-center my-auto justify-content-center text-center'>

                <button type="button" class="btn button-sale-custom btn-outline-success order-create-button text-dark" data-bundleid='{{ $item->id }}' style='color:black;'>Изменить</button>
                <button type="button" class="btn button-sale-custom btn btn-success order-create-button" data-bundleid='{{ $item->id }}'>Предложения</button>
            </div>
        </div>
        <br>
    @endforeach

    <div class="d-flex justify-content-center">
        {{--!! $modelsBundle->links() !!--}}
    </div>
</div>


<style>
    .button-width-middle{
        max-width: 250px;
    }
    .row-margin-middle{
        margin-top:10px;
        margin-bottom:10px;
    }
    .map-custom{
        height: 160px;
        width: 100%;
        margin-top: 10px;
    }
    .hiden{
        display: none;
    }
</style>