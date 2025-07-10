<h3>Fornecedor</h3>

{{ 'Texto de Teste' }}
<?= 'texto de teste' ?>

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

@if(count($fornecedores) > 0 && count($fornecedores) <= 10)
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem vários fornecedores cadastrados </h3>
@else
    <h3> Ñ Existem fornecedores cadastrados </h3>
@endif
