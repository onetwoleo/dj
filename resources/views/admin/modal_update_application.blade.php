{{--Модальное окно редактирования мероприятия--}}
<div class="modal fade" tabindex="-1" role="dialog" id="modal_update_application">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Редактирование записи</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" id="edit_form_appl">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="fio"
                               class="col-md-4 col-form-label text-md-right">{{ __('ФИО') }}</label>
                        <div class="col-md-6">
                            <input id="fio" type="text" class="form-control" name='fio' placeholder="ФИО"
                                   autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date"
                               class="col-md-4 col-form-label text-md-right">{{ __('Электронная почта') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name='email' placeholder="email"
                                   autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Номер телефона') }}</label>
                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name='phone' placeholder="Номер телефона"
                                   autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Сообщение') }}</label>
                        <div class="col-md-6">
                            <textarea id="message" class="form-control" name="message">
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

