@component('mail::message')
# Introdução

O corpo da Mensagem

* Opção 01
* Opção 02
* Opção 03
* Opção 04

@component('mail::button', ['url' => ''])
Texto do Botão de Enviar
@endcomponent

@component('mail::button', ['url' => ''])
Texto do Botão de Cadastrar
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
