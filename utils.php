function dump_to_table($array){
        if (!is_array($array)){
                return htmlspecialchars($array);
        } else {
                $txt="<table style='width:100%;border-collapse:collapse;font-size:9pt;font-family:arial;'>";
                foreach ($array as $k=>$v){
                        $txt.="<tr><td style='border-style:solid;border-width:1px;'>$k</td><td style='width:100%;border-style:solid;border-width:1px;'>";
                        $txt.=dumpToTable($v);
                        $txt.="</td></tr>";
                }
                $txt.="</table>";
                return $txt;
        }
}
