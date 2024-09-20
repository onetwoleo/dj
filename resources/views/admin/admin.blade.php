@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Записи') }}
                        <button class="btn btn-md btn-success  float-right" data-toggle="modal" data-target="#modal_add_record">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            Добавить
                        </button>
                    </div>
                    <div class="card-body">
                        @if (count($records) > 0)

                            <table class="table  table-striped table-responsive-sm">
                                <tbody>
                                <tr>
                                    <th valign="top">
                                        ФИО заказчика
                                    </th>
                                    <th valign="top">
                                        Дата
                                    </th>
                                    <th valign="top">
                                        Тип праздника
                                    </th>
                                    <th valign="top">
                                        Количество людей
                                    </th>
                                    <th valign="top">

                                    </th>
                                    <th valign="top">

                                    </th>
                                </tr>

                                @foreach($records as $record)


                                    <tr class='table-data'>
                                        <td  valign="top">
                                            {{ $record->fio }}
                                        </td>
                                        <td valign="top">
                                            {{date("d.m.Y",strtotime($record->date))}}
                                        </td>
                                        <td valign="top">
                                            {{ $record->type }}
                                        </td>
                                        <td valign="top">
                                            {{ $record->count }}
                                        </td>
                                        <td valign="top">
                                            <a data-toggle="modal" data-target="#modal_destroy_record" data-content="{{ json_encode($record,TRUE)}}" href="#">
                                            <button class="btn btn-md btn-outline-danger float-right">
                                                <i class="fa fa fa-trash-o fa-x fa-lg"></i>
                                            </button>
                                            </a>
                                        </td>
                                        <td valign="top">
                                            <a data-toggle="modal" data-target="#modal_update_record" data-content="{{ json_encode($record,TRUE)}}" href="#">
                                                <button class="btn btn-md btn-outline-success" >
                                                    <i class="fa fa fa-cog fa-x fa-lg"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>



                                @endforeach
                                </tbody>
                            </table>


                        @endif
                </div>

            </div>
        </div>
        </div>
            <br>
            <hr>
            <br>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">{{ __('Заявки формы обратной связи') }}
                        </div>
                        <div class="card-body">
                            @if (count($applications) > 0)

                                <table class="table  table-striped table-responsive-sm">
                                    <tbody>
                                    <tr>
                                        <th valign="top">
                                            ФИО
                                        </th>
                                        <th valign="top">
                                            Email
                                        </th>
                                        <th valign="top">
                                            Номер телефона
                                        </th>
                                        <th valign="top">

                                        </th>
                                        <th valign="top">

                                        </th>
                                    </tr>

                                    @foreach($applications as $application)


                                        <tr class='table-data'>
                                            <td  valign="top">
                                                {{ $application->fio }}
                                            </td>
                                            <td valign="top">
                                                {{ $application->email }}
                                            </td>
                                            <td valign="top">
                                                {{ $application->phone }}
                                            </td>
                                            <td valign="top">
                                                <a data-toggle="modal" data-target="#modal_destroy_application" data-content="{{ json_encode($application,TRUE)}}" href="#">
                                                    <button class="btn btn-md btn-outline-danger float-right">
                                                        <i class="fa fa fa-trash-o fa-x fa-lg"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td valign="top">
                                                <a data-toggle="modal" data-target="#modal_update_application" data-content="{{ json_encode($application,TRUE)}}" href="#">
                                                    <button class="btn btn-md btn-outline-success" >
                                                        <i class="fa fa fa-cog fa-x fa-lg"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>



                                    @endforeach
                                    </tbody>
                                </table>


                            @endif
                        </div>

                    </div>
                </div>
            </div>
    </div>
    @include('admin.modal_store')
    @include('admin.modal_destroy_record')
    @include('admin.modal_destroy_application')
    @include('admin.modal_update_record')
    @include('admin.modal_update_application')


@endsection
