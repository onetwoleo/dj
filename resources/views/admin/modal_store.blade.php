<div class="modal fade" id="modal_add_record" tabindex="-1" role="dialog" aria-labelledby="store_ModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="store_ModalLabel">Добавление записи</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <form method="POST" action="{{ route('store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="fio" class="col-md-4 col-form-label text-md-right">ФИО</label>

                        <div class="col-md-6">
                            <input id="fio" type="text" class="form-control @error('fio') is-invalid @enderror" name="fio" value="{{ old('fio') }}" required autocomplete="fio" autofocus>

                            @error('fio')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label text-md-right">Дата</label>

                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" required autocomplete="date">

                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Номер телефона</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="count" class="col-md-4 col-form-label text-md-right">Количество людей</label>

                        <div class="col-md-6">
                            <input id="count" type="text" class="form-control @error('count') is-invalid @enderror" name="count" required autocomplete="count">

                            @error('count')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">Тип праздника</label>

                        <div class="col-md-6">
                            <select id="type" class="form-select @error('type') is-invalid @enderror" name="type" required autocomplete="type">
                                <option value="Мастер класс">Мастер класс</option>
                                <option value="День рождения">День рождения</option>
                                <option value="Анимация">Анимация</option>
                                <option value="Серебрянная дискотека">Серебрянная дискотека</option>
                                <option value="Вечеринка с Вэнсдей">Вечеринка с Вэнсдей</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="happy-group">
                        <label for="happy" class="col-md-4 col-form-label text-md-right">Имя именниника</label>

                        <div class="col-md-6">
                            <input id="happy" type="text" class="form-control @error('happy') is-invalid @enderror" name="happy" autocomplete="happy">

                            @error('happy')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">Дополнительная информация</label>

                        <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description">
                                    </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>



                <div class="modal-footer">
                    <button class="btn btn-md btn-outline-success" type="submit">Сохранить</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
