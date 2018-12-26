
<html>

<head>
  <title>Phage Visualization</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

  <script src = "ObjectSvgV2.js"></script>

    <script src="jquery.js"></script>
    <script src = "jquery-ui/jquery-ui.js"></script>
    <link rel = "stylesheet" href = "jquery-ui/jquery-ui.css">

        <script src = "d3.min.js"></script>

  <style type="text/css">
    .container {
      background-color: red;
    }
  </style>

</head>

<body>

  <br /><br />

  <div class="container" style="width:600px;">

    <br /><br />

    <form method="post" id="framework_form">

      <div class="form-group">
        <p>
          <label>Select which Phages you want to cut</label>

          <select id="framework" name="formPhage[]" multiple class="form-control" autofocus>

            <option value="Alatin">Alatin</option>
            <option value="Alpacados">Alpacados</option>
            <option value="AngryOrchard">AngryOrchard</option>
            <option value="AppleCloud">AppleCloud</option>
            <option value="Belenaria">Belenaria</option>
            <option value="BobbyDazzler">BobbyDazzler</option>
            <option value="Bonanza">Bonanza</option>
            <option value="Bradshaw">Bradshaw</option>
            <option value="Bryce">Bryce</option>
            <option value="ChewyVIII">ChewyVIII</option>
            <option value="CosmicSans">CosmicSans</option>
            <option value="Dinger">Dinger</option>
            <option value="DocB7">DocB7</option>
            <option value="E3">E3</option>
            <option value="Erik">Erik</option>
            <option value="Espica">Espica</option>
            <option value="Finch">Finch</option>
            <option value="Gollum">Gollum</option>
            <option value="Grayson">Grayson</option>
            <option value="Harlequin">Harlequin</option>
            <option value="Hiro">Hiro</option>
            <option value="Jace">Jace</option>
            <option value="Jester">Jester</option>
            <option value="Krishelle">Krishelle</option>
            <option value="Lillie">Lillie</option>
            <option value="Mahdia">Mahdia</option>
            <option value="Naiad">Naiad</option>
            <option value="Nancinator">Nancinator</option>
            <option value="Natosaleda">Natosaleda</option>
            <option value="Partridge">Partridge</option>
            <option value="Pepy6">Pepy6</option>
            <option value="Peregrin">Peregrin</option>
            <option value="Phrankenstein">Phrankenstein</option>
            <option value="Pine5">Pine5</option>
            <option value="Poco6">Poco6</option>
            <option value="Rasputin">Rasputin</option>
            <option value="RER2">RER2</option>
            <option value="RexFury">RexFury</option>
            <option value="RGL3">RGL3</option>
            <option value="Rhodalysa">Rhodalysa</option>
            <option value="StCroix">StCroix</option>
            <option value="Swann">Swann</option>
            <option value="Takoda">Takoda</option>
            <option value="Trina">Trina</option>
            <option value="TWAMP">TWAMP</option>
            <option value="UhSalsa">UhSalsa</option>
            <option value="Weasels2">Weasels2</option>
            <option value="Yogi">Yogi</option>
            <option value="Yoncess">Yoncess</option>

          </select>
        </p>

        <p>
          <label>Select an enzyme</label>

          <select id="framework" name="formEnzyme" single class="form-control" autofocus>

            <option value="AatII">AatII</option>
            <option value="AbaSI">AbaSI</option>
            <option value="Acc65I">Acc65I</option>
            <option value="AccI">AccI</option>
            <option value="AciI">AciI</option>
            <option value="AclI">AclI</option>
            <option value="AcuI">AcuI</option>
            <option value="AfeI">AfeI</option>
            <option value="AflII">AflII</option>
            <option value="AflIII">AflIII</option>
            <option value="AgeI">AgeI</option>
            <option value="AgeI-HFÂ®">AgeI-HFÂ®</option>
            <option value="AhdI">AhdI</option>
            <option value="AleI">AleI</option>
            <option value="AluI">AluI</option>
            <option value="AlwI">AlwI</option>
            <option value="AlwNI">AlwNI</option>
            <option value="ApaI">ApaI</option>
            <option value="ApaI">ApaI</option>
            <option value="ApeKI">ApeKI</option>
            <option value="ApoI">ApoI</option>
            <option value="ApoI-HFÂ®">ApoI-HFÂ®</option>
            <option value="AscI">AscI</option>
            <option value="AseI">AseI</option>
            <option value="AsiSI">AsiSI</option>
            <option value="AvaI">AvaI</option>
            <option value="AvaII">AvaII</option>
            <option value="AvrII">AvrII</option>
            <option value="BaeGI">BaeGI</option>
            <option value="BaeI">BaeI</option>
            <option value="BamHI">BamHI</option>
            <option value="BamHI-HFÂ®">BamHI-HFÂ®</option>
            <option value="BanI">BanI</option>
            <option value="BanII">BanII</option>
            <option value="BbsI">BbsI</option>
            <option value="BbsI-HFÂ®">BbsI-HFÂ®</option>
            <option value="BbvCI">BbvCI</option>
            <option value="BbvI">BbvI</option>
            <option value="BccI">BccI</option>
            <option value="BceAI">BceAI</option>
            <option value="BcgI">BcgI</option>
            <option value="BciVI">BciVI</option>
            <option value="BclI">BclI</option>
            <option value="BclI-HF">BclI-HF</option>
            <option value="BcoDI">BcoDI</option>
            <option value="BfaI">BfaI</option>
            <option value="BfuAI">BfuAI</option>
            <option value="BfuCI">BfuCI</option>
            <option value="BglI">BglI</option>
            <option value="BglII">BglII</option>
            <option value="BlpI">BlpI</option>
            <option value="BmgBI">BmgBI</option>
            <option value="BmrI">BmrI</option>
            <option value="BmtI">BmtI</option>
            <option value="BmtI-HFÂ®">BmtI-HFÂ®</option>
            <option value="BpmI">BpmI</option>
            <option value="Bpu10I">Bpu10I</option>
            <option value="BpuEI">BpuEI</option>
            <option value="BsaI">BsaI</option>
            <option value="BsaAI">BsaAI</option>
            <option value="BsaBI">BsaBI</option>
            <option value="BsaHI">BsaHI</option>
            <option value="BsaI">BsaI</option>
            <option value="BsaI-HFÂ®">BsaI-HFÂ®</option>
            <option value="BsaJI">BsaJI</option>
            <option value="BsaWI">BsaWI</option>
            <option value="BsaXI">BsaXI</option>
            <option value="BseRI">BseRI</option>
            <option value="BseYI">BseYI</option>
            <option value="BsgI">BsgI</option>
            <option value="BsiEI">BsiEI</option>
            <option value="BsiHKAI">BsiHKAI</option>
            <option value="BsiWI">BsiWI</option>
            <option value="BsiWI-HFÂ®">BsiWI-HFÂ®</option>
            <option value="BslI">BslI</option>
            <option value="BsmAI">BsmAI</option>
            <option value="BsmBI">BsmBI</option>
            <option value="BsmFI">BsmFI</option>
            <option value="BsmI">BsmI</option>
            <option value="BsoBI">BsoBI</option>
            <option value="Bsp1286I">Bsp1286I</option>
            <option value="BspCNI">BspCNI</option>
            <option value="BspDI">BspDI</option>
            <option value="BspEI">BspEI</option>
            <option value="BspHI">BspHI</option>
            <option value="BspMI">BspMI</option>
            <option value="BspQI">BspQI</option>
            <option value="BsrBI">BsrBI</option>
            <option value="BsrDI">BsrDI</option>
            <option value="BsrFÎ±I">BsrFÎ±I</option>
            <option value="BsrGI">BsrGI</option>
            <option value="BsrGI-HFÂ®">BsrGI-HFÂ®</option>
            <option value="BsrI">BsrI</option>
            <option value="BssHII">BssHII</option>
            <option value="BssSÎ±I">BssSÎ±I</option>
            <option value="BstAPI">BstAPI</option>
            <option value="BstBI">BstBI</option>
            <option value="BstEII">BstEII</option>
            <option value="BstEII-HFÂ®">BstEII-HFÂ®</option>
            <option value="BstNI">BstNI</option>
            <option value="BstUI">BstUI</option>
            <option value="BstXI">BstXI</option>
            <option value="BstYI">BstYI</option>
            <option value="BstZ17I-HFÂ®">BstZ17I-HFÂ®</option>
            <option value="Bsu36I">Bsu36I</option>
            <option value="BtgI">BtgI</option>
            <option value="BtgZI">BtgZI</option>
            <option value="BtsCI">BtsCI</option>
            <option valule="BtsÎ±I">BtsÎ±I</option>
            <option value="BtsIMutI">BtsIMutI</option>
            <option value="Cac8I">Cac8I</option>
            <option value="CspCI">CspCI</option>
            <option value="CviAII">CviAII</option>
            <option value="CviKI-1">CviKI-1</option>
            <option value="CviQI">CviQI</option>
            <option value="DpnII">DpnII</option>
            <option value="DrdI">DrdI</option>
            <option value="EagI">EagI</option>
            <option value="EarI">EarI</option>
            <option value="EciI">EciI</option>
            <option value="EcoNI">EcoNI</option>
            <option value="Eco53kI">Eco53kI</option>
            <option value="Fnu4HI">Fnu4HI</option>
            <option value="FseI">FseI</option>
            <option value="FspEI">FspEI</option>
            <option value="HinP1I">HinP1I</option>
            <option value="Hpy99I">Hpy99I</option>
            <option value="Hpy166II">Hpy166II</option>
            <option value="Hpy188I">Hpy188I</option>
            <option value="Hpy188III">Hpy188III</option>
            <option value="HpyAV">HpyAV</option>
            <option value="HpyCH4III">HpyCH4III</option>
            <option value="HpyCH4IV">HpyCH4IV</option>
            <option value="HpyCH4V">HpyCH4V</option>
            <option value="KasI">KasI</option>
            <option value="LpnPI">LpnPI</option>
            <option value="MluCI">MluCI</option>
            <option value="MlyI">MlyI</option>
            <option value="MmeI">MmeI</option>
            <option value="MscI">MscI</option>
            <option value="MseI">MseI</option>
            <option value="MslI">MslI</option>
            <option value="MspJI">MspJI</option>
            <option value="MwoI">MwoI</option>
            <option value="NgoMIV">NgoMIV</option>
            <option value="NlaIII">NlaIII</option>
            <option value="NlaIV">NlaIV</option>
            <option value="NmeAIII">NmeAIII</option>
            <option value="NspI">NspI</option>
            <option value="PaeR7I">PaeR7I</option>
            <option value="pflFI">pflFI</option>
            <option value="pflMI">pflMI</option>
            <option value="pleI">pleI</option>
            <option value="PluTI">PluTI</option>
            <option value="PmeI">PmeI</option>
            <option value="PmlI">PmlI</option>
            <option value="PpuMI">PpuMI</option>
            <option value="PspGI">PspGI</option>
            <option value="RsrII">RsrII</option>
            <option value="SapI">SapI</option>
            <option value="SfcI">SfcI</option>
            <option value="SfoI">SfoI</option>
            <option value="SgrAI">SgrAI</option>
            <option value="SmlI">SmlI</option>
            <option value="SrfI">SrfI</option>
            <option value="StyD4I">StyD4I</option>
            <option value="TfiI">TfiI</option>
            <option value="TseI">TseI</option>
            <option value="Tsp45I">Tsp45I</option>
            <option value="TspMI">TspMI</option>
            <option value="TspRI">TspRI</option>
            <option value="XcmI">XcmI</option>
            <option value="XmnI">XmnI</option>
          </select>
        </p>

      </div>

      <div class="form-group">

        <input type="submit" class="btn btn-info" name="submit" value="Submit" />

      </div>

    </form>

    <br />

  </div>

</body>

</html>

<script>
  $(document).ready(function ()
{
    
    $('#framework').multiselect({
      nonSelectedText: 'Select Phage',
      enableFiltering: true,
      enableCaseInsensitiveFiltering: true,
      buttonWidth: '400px'
    });

    $('#framework_form').on('submit', function(event)
    {
        var selectedPhages = $("#framework").val();
        console.log(selectedPhages);

        event.preventDefault();
        var form_data = $(this).serialize();
        
        $.ajax(
        {
            url:"insert.php",
            method:"POST",
            data:form_data,
            success:function(data)
            {
                $('#framework option:selected').each(function(){
                $(this).prop('selected', false);
                });
                $('#framework').multiselect('refresh');

                if(selectedPhages.length != 0)
                {
                    var result = jQuery.parseJSON(data);
                    $.each(result, function(index, value) {
                        console.log(index+": "+value);
                        

                    });
                }
                else{
                    console.log("Please select");
                }
            }
         });
    });
});
</script>