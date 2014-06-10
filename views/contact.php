<section class="<?php echo($url) ?>">

    <form action="" id="form-contact">
        <div class="input-contend">
            <label for="name">nombre : </label>
            <input type="text" id="name" name="name"/>
        </div>
        <div class="input-contend">
            <label for="company">Empresa : </label>
            <input type="text" id="company" name="company"/>
        </div>
        <div class="input-contend">
            <label for="email">E-mail : </label>
            <input type="email" id="email" name="email"/>
        </div>
        <div class="input-contend">
            <label for="phone">Telefono : </label>
            <input type="tel" id="phone" name="phone"/>
        </div>
        <div class="input-contend">
            <label for="comment">Comentario : </label>
            <textarea name="comment" id="comment"></textarea>
        </div>

        <input type="submit" class="submit"/>
    </form>
</section>
<div class="divisor">
    <div class="lines"></div><span class="plus">+</span>
</div>