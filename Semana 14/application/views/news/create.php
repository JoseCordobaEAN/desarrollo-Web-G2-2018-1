<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Titulo Noticia</label>
    <input type="input" name="title" /><br />

    <label for="text">Contenido Noticia</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Crear Noticia" />

</form>