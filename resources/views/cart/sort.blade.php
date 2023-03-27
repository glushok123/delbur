<div class='container'>
    <div class='row'>
        <div class="dropdown sort-block-custom">
            <button class="btn btn-secondary dropdown-toggle bg-transparent text-dark border-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                <span name-sort>По дате</span>
            </button>
            <ul class="dropdown-menu sort-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sort-product" id="RadioSort1" data-sort='desc-date' >
                  <label class="form-check-label" for="RadioSort1">
                        По дате (Сначала новые)
                  </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sort-product" id="RadioSort3" data-sort='asc-date' checked>
                    <label class="form-check-label" for="RadioSort3">
                          По дате (С конца)
                    </label>
                </div>
            </ul>
        </div>
    </div>
</div>