@extends('layouts.app')
@section('content')
    <div class="contacts" style="margin-bottom: 50%">
        <div class="card bg-transparent" style="border-color: transparent;border: none">
            <div class="card-body text-center" style="font-size: 49px">
                <h2 class="text-white">Конакты:</h2>
                <a href="//{{ config('app.vk.group_url') }}"
                   target="_blank"
                   class="mr-2"
                   data-toggle="tooltip"
                   data-placement="bottom"
                   title="Наша группа ВК">
                        <span class="icon-vk"></span>
                </a>
                <a href="//{{ config('app.vk.admin_url') }}"
                   target="_blank"
                   data-toggle="tooltip"
                   data-placement="bottom"
                   title="Администратор вк">
                    <span class="icon-vk"></span>
                </a>
            </div>
        </div>
    </div>
@endsection