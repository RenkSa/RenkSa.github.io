<h3>Fornecedor</h3>

{{-- {{ 'Texto de Teste' }}

{{-- Fica o comentário que será descartado pelo interpretador do blade / na sintaxe do blade nao utilizamos os ';' para encerrar os comandos! --}}



<script>
    document.body.style.background = '#000'
    document.body.style.color = '#fff'
    /*
    if() {
        
    } else if() {

    } else {
        
    } */

</script>

{{-- @unless executa se o retorno for false --}}
<br>
Fornecedor: {{ $fornecedores[0] ['nome'] }}
<br>
Status: {{ $fornecedores[0] ['status'] }}
<br>
@if($fornecedores[0]['status'] == 'S')
    Fornecedor inativo.
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condicao for false -->
    Fornecedor inativo.
@endunless


{{-- @if(count($fornecedores) > 0 && count($fornecedores) <= 10)
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem vários fornecedores cadastrados </h3>
@else
    <h3> Ñ Existem fornecedores cadastrados </h3>
@endif --}}
