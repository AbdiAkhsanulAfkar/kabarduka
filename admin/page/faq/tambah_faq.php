<div class="panel panel-default">
    <div class="panel-heading">
        Tambah FAQ
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
  
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Question</label>
                        <textarea class="form-control" name="question" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Answer</label>
                        <textarea class="form-control" name="answer" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php

$question = @$_POST['question'];
$answer = @$_POST['answer'];

$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("insert into faq (question,answer)
	  values('$question', '$answer')");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=faq";
        </script>
<?php
    }
}
?>