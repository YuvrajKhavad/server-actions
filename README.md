# Server Actions
Different "exec" PHP commands for download, zip, unzip and directory permission.  Sometimes we don't have access to cPanel then we can use below commands.

#note
First check "exec" funcation anable or not using below code. Becuase some server disabled.

if(exec('echo EXEC') == 'EXEC'){
    echo 'exec works';
}
