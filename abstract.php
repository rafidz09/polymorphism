<?php
abstract class ruangan {
    abstract public function nama();
}
class immobi extends ruangan {
    public function nama() {
        return "immobi nama ruangan pplg";
    }
}

$immobi = new immobi;

echo "<b>ruangan : </b>";
echo $immobi->nama(); 




