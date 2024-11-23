<?php
/* Smarty version 4.3.4, created on 2024-11-17 09:20:27
  from 'C:\xampp\htdocs\content\themes\default\templates\__feeds_game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6739b55be75552_78709876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3376ca3429ea813237f54a7e56e621f662a49050' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\__feeds_game.tpl',
      1 => 1684863814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6739b55be75552_78709876 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_tpl']->value != "list") {?>
  <li class="col-md-6 col-lg-3">
    <div class="ui-box">
      <div class="img">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
">
          <img alt="<?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_game']->value['thumbnail'];?>
" />
        </a>
      </div>
      <div class="mt10">
        <a class="h6 text-active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['_game']->value['played']) {?>
          <div class="mt10 mb20 text-sm">
            <i class="far fa-clock mr5"></i><?php echo __("Played");?>
: <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['_game']->value['last_played_time'];?>
"><?php echo $_smarty_tpl->tpl_vars['_game']->value['last_played_time'];?>
</span>
          </div>
        <?php }?>
      </div>
      <div class="mt10">
        <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
">
          <?php echo __("Play");?>

        </a>
      </div>
    </div>
  </li>
<?php } elseif ($_smarty_tpl->tpl_vars['_tpl']->value == "list") {?>
  <li class="feeds-item">
    <div class="data-container">
      <a class="data-avatar" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_game']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
">
      </a>
      <div class="data-content">
        <div class="float-end">
          <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
"><?php echo __("Play");?>
</a>
        </div>
        <div>
          <span class="name">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
</a>
          </span>
        </div>
      </div>
    </div>
  </li>
<?php }
}
}
