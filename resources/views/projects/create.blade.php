<form action="{{route('projects.store')}}" method="POST">
    @csrf
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
    <label for="tech">Tech</label>
    <input type="text" name="tech" id="tech">
     <label for="completed">Data Compleatamento</label>
    <input type="date" name="completed" id="completed">
     <label for="client">Cliente</label>
    <input type="text" name="client" id="client">
     <label for="description">Descrizione</label>
    <input type="text" name="description" id="description">
     <label for="url_img">Link immagine</label>
    <input type="text" name="url_img" id="url_img">
     <label for="url_git">Link git</label>
    <input type="text" name="url_git" id="url_git">
    <input type="submit" value="Crea">
</form>