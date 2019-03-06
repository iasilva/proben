<?php
    $linksMenu=[
      [
        'acao'=>'Cadastrar',
        'link'=>'/usuario/cadastrar',
        'title'=>'Cadastro inicial de usuários'
      ],  
      [
        'acao'=>'Listar',
        'link'=>'/usuario/listar',
        'title'=>'Listar todos os usuários cadastrados'
      ]    
    ];
?>


<section id="menu-usuario">
    <ul>
        <?php foreach ($linksMenu as $link):?>
        <li><a href="<?php echo $link['link'] ?>" title="<?php echo $link['title'] ?>" > <?php echo $link['acao'] ?></a></li>
        <?php endforeach;?>        
       
    </ul>
</section>

