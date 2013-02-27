<html>
  <head>
  </head>

  <body>
    <?php

      $json = file_get_contents("fortune500.json");

      $json_obj = json_decode($json)->{"result"};

      $xsl = new DOMDocument;
      $xsl->load("XSL.xsl");

      $proc = new XSLTProcessor();
      $proc->importStyleSheet($xsl);

      $dom = new DOMDocument('1.0', 'utf-8');

      $companies = $dom->createElement("Companies");
      $dom->appendChild($companies);

      foreach($json_obj as $obj) {
        $tr = $dom->createElement("Company");
        $companies->appendChild($tr);

        $td = $dom->createElement("Year", $obj->{'Year'});
        $tr->appendChild($td);

        $td = $dom->createElement("rank", $obj->{'Rank'});
        $tr->appendChild($td);

        $td = $dom->createElement("company", $obj->{'Company'});
        $tr->appendChild($td);

        $td = $dom->createElement("revenue", $obj->{'Revenue'});
        $tr->appendChild($td);

        $td = $dom->createElement("Profit", $obj->{'Profit'});
        $tr->appendChild($td);
      }

      echo $proc->transformToXML($dom);
    ?>
  </body>
</html>
