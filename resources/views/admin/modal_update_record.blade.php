{{--Модальное окно редактирования мероприятия--}}
<div class="modal fade" tabindex="-1" role="dialog" id="modal_update_record">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Редактирование записи</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" id="edit_form">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="fio"
                               class="col-md-4 col-form-label text-md-right">{{ __('Наименование') }}</label>
                        <div class="col-md-6">
                            <input id="fio" type="text" class="form-control" name='fio' placeholder="ФИО"
                                   autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date"
                               class="col-md-4 col-form-label text-md-right">{{ __('Дата проведения') }}</label>
                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control" name='date' placeholder="Дата"
                                   autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone"
                               class="col-md-4 col-form-label text-md-right">{{ __('Номер телефона') }}</label>
                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name='phone' placeholder="Номер телефона"
                                   autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="count"
                               class="col-md-4 col-form-label text-md-right">{{ __('Количество детей') }}</label>
                        <div class="col-md-6">
                            <input id="count" type="text" class="form-control" name='count' placeholder="Количество детей"
                                   autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type"
                               class="col-md-4 col-form-label text-md-right">{{ __('Тип праздника') }}</label>
                        <div class="col-md-6">
                            <select id="type" class="form-select" name='type' autofocus disabled>
                                <option value="Мастер класс">Мастер класс</option>
                                <option value="День рождения">День рождения</option>
                                <option value="Анимация">Анимация</option>
                                <option value="Серебрянная дискотека">Серебрянная дискотека</option>
                                <option value="Вечеринка с Вэнсдей">Вечеринка с Вэнсдей</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="happy-group">
                        <label for="happy"
                               class="col-md-4 col-form-label text-md-right">{{ __('Имя именниника') }}</label>
                        <div class="col-md-6">
                            <input id="happy" type="text" class="form-control" name='happy' placeholder="Имя именниника"
                                   autofocus disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Описание') }}</label>
                        <div class="col-md-6">
                            <textarea id="description" class="form-control" name="description">
                            </textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-outline-success btn-md">Сохранить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

