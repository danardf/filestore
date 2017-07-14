<?php
  $dataurl = "ajax.php?module=filestore&driver=Local&command=getJSON&jdata=grid";
?>
<br/>
<div id="toolbar-localgrid">
  <a href='?display=filestore&driver=local&view=form' class='btn btn-default'><i class="fa fa-plus"></i>&nbsp;<?php echo _("Add Local Path")?></a>
</div>
<table id="localgrid"
    data-url="<?php echo $dataurl?>"
    data-cache="false"
    data-cookie="true"
    data-cookie-id-table="localgrid"
    data-toolbar="#toolbar-localgrid"
    data-maintain-selected="true"
    data-show-columns="true"
    data-show-toggle="true"
    data-toggle="table"
    data-pagination="true"
    data-search="true"
    class="table table-striped">
  <thead>
    <tr>
      <th data-field="name"><?php echo _("Name")?></th>
      <th data-field="desc"><?php echo _("Description")?></th>
      <th data-field="id" data-formatter="LocalLinkFormatter"><?php echo _("Actions")?></th>
    </tr>
  </thead>
</table>
<script>
function LocalLinkFormatter(value, row, index){
    var html = '<a href="?display=filestore&driver=Local&view=form&id='+value+'"><i class="fa fa-pencil"></i></a>';
    html += '&nbsp;<a href="?display=filestore&driver=Local&action=delete&id='+value+'" class="delAction"><i class="fa fa-trash"></i></a>';
    return html;
}
</script>
