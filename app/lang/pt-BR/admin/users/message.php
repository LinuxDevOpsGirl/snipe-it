<?php

return array(

    'accepted'                  => 'You have successfully accepted this asset.',
    'declined'                  => 'You have successfully declined this asset.',
    'user_exists'               => 'O usuário já existe!',
    'user_not_found'            => 'O usuário [:id] não existe.',
    'user_login_required'       => 'O campo de login é requerido',
    'user_password_required'    => 'A senha é requerida.',
    'insufficient_permissions'  => 'Permissões Insuficientes.',
    'user_deleted_warning'      => 'Este usuário foi deletado. Você terá que restaurar este usuário para editá-los ou atribui-lós novos bens.',


    'success' => array(
        'create'    => 'O usuário foi criado com sucesso.',
        'update'    => 'O usuário foi atualizado com sucesso.',
        'delete'    => 'O usuário foi excluído com sucesso.',
        'ban'       => 'O usuário foi banido com sucesso.',
        'unban'     => 'O usuário foi desbanido com sucesso.',
        'suspend'   => 'O usuário foi suspenso com sucesso.',
        'unsuspend' => 'O usuário foi removido da suspensão com sucesso.',
        'restored'  => 'O usuário foi restaurado com sucesso.',
        'import'    => 'Usuários importados com sucesso.',
    ),

    'error' => array(
        'create' => 'Houve um problema ao criar o usuário. Tente novamente.',
        'update' => 'Houve um problema ao atualizar o usuário. Tente novamente.',
        'delete' => 'Houve um problema ao excluir o usuário. Tente novamente.',
        'unsuspend' => 'Houve um problema ao remover a suspensão do usuário. Tente novamente.',
        'import'    => 'Houve um problema ao importar usuários. Tente novamente.',
        'asset_already_accepted' => 'Este ativo já foi aceito.',
        'accept_or_decline' => 'You must either accept or decline this asset.',
    ),

    'deletefile' => array(
        'error'   => 'File not deleted. Please try again.',
        'success' => 'File successfully deleted.',
    ),

    'upload' => array(
        'error'   => 'File(s) not uploaded. Please try again.',
        'success' => 'File(s) successfully uploaded.',
        'nofiles' => 'You did not select any files for upload',
        'invalidfiles' => 'One or more of your files is too large or is a filetype that is not allowed. Allowed filetypes are png, gif, jpg, doc, docx, pdf, and txt.',
    ),

);
