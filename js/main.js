/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
 
    
    if(button.data('customer') == undefined){
         var id = button.data('address');
    }else{
         var id = button.data('customer');
    }
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir o item #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})