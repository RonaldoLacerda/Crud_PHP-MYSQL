<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" >
    </div> 
    <div class="mb-3">   
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" >
    </div>
    <div class="mb-3">  
        <label for="">Telefone</label>
        <input type="text" name="telefone" class="form-control" >  
    </div>
    <div class="mb-3"> 
        <button type="submit" class="btn btn-primary">Enviar</button>

</form>
