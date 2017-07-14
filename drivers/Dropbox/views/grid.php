<?php
  $dataurl = "ajax.php?module=filestore&driver=Dropbox&command=getJSON&jdata=grid";
?>
<br/>
<div id="toolbar-dropboxgrid">
  <a href='?display=filestore&driver=Dropbox&view=form' class='btn btn-default'><i class="fa fa-plus"></i>&nbsp;<?php echo _("Add Dropbox Account")?></a>
</div>
<table id="dropboxgrid"
    data-url="<?php echo $dataurl?>"
    data-cache="false"
    data-cookie="true"
    data-cookie-id-table="dropboxgrid"
    data-toolbar="#toolbar-dropboxgrid"
    data-maintain-selected="true"
    data-show-columns="true"
    data-show-toggle="true"
    data-toggle="table"
    data-pagination="true"
    data-search="true"
    class="table table-striped">
  <thead>
    <tr>
      <th data-field="name"><?php echo _("Dropbox Account")?></th>
      <th data-field="desc"><?php echo _("Description")?></th>
      <th data-field="id" data-formatter="DropboxLinkFormatter"><?php echo _("Actions")?></th>
    </tr>
  </thead>
</table>
<script>
function DropboxLinkFormatter(value, row, index){
    var html = '<a href="?display=filestore&driver=Dropbox&view=form&id='+value+'"><i class="fa fa-pencil"></i></a>';
    html += '&nbsp;<a href="?display=filestore&driver=Dropbox&action=delete&id='+value+'" class="delAction"><i class="fa fa-trash"></i></a>';
    return html;
}
</script>
