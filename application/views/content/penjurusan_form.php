<style type="text/css" media="screen">
  fieldset{
    border: 1px groove #333 !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;}
  legend{
    font-size: 1.2em !important;
    /* font-weight: bold !important; */
    /* text-align: left !important; */
  }
</style>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <?php echo form_open('#',array('id'=>'penjurusan')); ?>
        <div class="row">
          <div class="col-lg-12">
            <h4 class="page-header">DATA SISWA</h4>
            <div class="form-group">
              <select name="txtNis" class="" id="nis">
                <optgroup label="NIS">
                  <option value="">NIS</option>
                  <?php foreach ($siswa as $row): ?>
                    <?php echo '<option value="'.$row['nis'].'">'. $row['nis'].' - '.$row['nama'].'</option>'; ?>
                  <?php endforeach ?>
                </optgroup>
              </select>
            </div>
            <p class="tile-footer"></p>
          </div>
          <div class="col-lg-4">
            <h4 class="page-header">IPA</h4>
            <fieldset>
              <legend>KEMAMPUAN</legend>
              <p>ISI BERDASAR NILAI RAPORT</p>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">BIOLOGI:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="biologi" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">FISIKA:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="fisika" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">MATEMATIKA:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="matematika" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">KIMIA:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="kimia" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">RERATA</label>
                <div class="col-sm-9">
                  <input type="text" name="rerata_ipa" class="form-control" placeholder="RERATA" readonly/>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>BAKAT</legend>
              <p>ISI BERDASARKAN HASIL TES BAKAT</p>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">NILAI:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="bakat_ipa" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>MINAT</legend>
              <p>NILAI MINAT BERDASARKAN MINAT SISWA DALAM PRESENTASI</p>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label col-form-label-sm">NILAI:</label>
                <div class="col-sm-8">
                  <input type="number" name="minat_ipa" placeholder="0" onkeypress="javascript:return isNumber(event)"/>%
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>HASIL TSUKAMOTO (IPA)</legend>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label col-form-label-sm">TINGGI:(%)</label>
                <div class="col-sm-8">
                  <input type="text" id="ipa" name="tinggi_ipa" class="form-control" placeholder="TINGGI" readonly/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label col-form-label-sm">RENDAH:(%)</label>
                <div class="col-sm-8">
                  <input type="text" name="rendah_ipa" class="form-control" placeholder="RENDAH" readonly/>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="col-lg-4">
            <h4 class="page-header">IPS</h4>
            <fieldset>
              <legend>KEMAMPUAN</legend>
              <p>ISI BERDASAR NILAI RAPORT</p>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">SOSIOLOGI:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="sosiologi" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">SEJARAH:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="sejarah" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">GEOGRAFI:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="geografi" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">EKONOMI:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="ekonomi" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">RERATA</label>
                <div class="col-sm-9">
                  <input type="text" name="rerata_ips" class="form-control" placeholder="RERATA" readonly/>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>BAKAT</legend>
              <p>ISI BERDASARKAN HASIL TES BAKAT</p>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">NILAI:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="bakat_ips" placeholder="0" onkeypress="javascript:return isNumber(event)"/>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>MINAT</legend>
              <p>NILAI MINAT BERDASARKAN MINAT SISWA DALAM PRESENTASI</p>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">NILAI:</label>
                <div class="col-sm-9">
                  <input type="number" name="minat_ips" placeholder="0" onkeypress="javascript:return isNumber(event)"/>%
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>HASIL TSUKAMOTO (IPS)</legend>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label col-form-label-sm">TINGGI:(%)</label>
                <div class="col-sm-8">
                  <input type="text" id="ips" name="tinggi_ips" class="form-control" placeholder="TINGGI" readonly/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label col-form-label-sm">RENDAH:(%)</label>
                <div class="col-sm-8">
                  <input type="text" name="rendah_ips" class="form-control" placeholder="RENDAH" readonly/>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="col-lg-4">
            <h4 class="page-header">&nbsp;</h4>
            <fieldset>
              <legend>HASIL AKHIR</legend>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">NIS:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nis" placeholder="NIS" readonly/>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-sm">NAMA:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama_siswa" placeholder="NAMA SISWA" readonly/>
                </div>
              </div>
              <h4>REKOMENDASI JURUSAN</h4>
             <input type="text" id="jurusan" name="hasil_jurusan" class="form-control" readonly/>
            </fieldset>
          </div>
        </div>
        <div class="tile-footer">
          <button class="btn btn-primary" type="button" onclick="process()">PROSES</button>
          <button class="btn btn-warning" type="button" onclick="save()">SIMPAN</button>
          <button class="btn btn-danger" type="reset">BATAL</button>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script>
  $('#nis').select2();
  $('#nis').change(function(){
    var nis = $('#nis').val();
    $('input[name="nis"]').val(nis);
    get_nis(nis);
  });
  //check by NIS
  function get_nis(nis) {
    $.ajax({
      url: '<?php echo site_url('penjurusan/check_nis') ?>',
      type: 'POST',
      dataType: 'json',
      data:'nis='+nis,
      encode:true,
      success:function(data) {
        $('input[name="nama_siswa"]').val(data.nama);
        console.log();
      }
    })
  }
  //penjurusan
  function isNumber(evt) {
    var iKeyCode = (evt.which) ? evt.which : evt.keyCode
    if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
      return false;
    return true;
  }
  function tsukamotoIPA() {
    var kta,ksa,kra,bta,bsa,bra,mta,msa,mra;//IPA    
    var nBiologi,nFisika,nMatematika,nKimia,nBakatIPA,nMinatIPA,rerataIPA;
    //atribut nilai min IPA
    var minRRRipa,minRRSipa,minRRTipa,minRSRipa,minRSSipa,minRSTipa,minRTRipa,minRTSipa,minRTTipa,minSRRipa,minSRSipa,minSRTipa,minSSRipa,minSSSipa,minSSTipa,minSTRipa,minSTSipa,minSTTipa,minTRRipa,minTRSipa,minTRTipa,minTSRipa,minTSSipa,minTSTipa,minTTRipa,minTTSipa,minTTTipa;
    //atribut nilai keanggotaan IPA
    var aRRRipa,aRRSipa,aRRTipa,aRSRipa,aRSSipa,aRSTipa,aRTRipa,aRTSipa,aRTTipa,aSRRipa,aSRSipa,aSRTipa,aSSRipa,aSSSipa,aSSTipa,aSTRipa,aSTSipa,aSTTipa,aTRRipa,aTRSipa,aTRTipa,aTSRipa,aTSSipa,aTSTipa,aTTRipa,aTTSipa,aTTTipa;
    //perkalian atribut min dengan kenggotaan IPA
    var xRRRipa,xRRSipa,xRRTipa,xRSRipa,xRSSipa,xRSTipa,xRTRipa,xRTSipa,xRTTipa,xSRRipa,xSRSipa,xSRTipa,xSSRipa,xSSSipa,xSSTipa,xSTRipa,xSTSipa,xSTTipa,xTRRipa,xTRSipa,xTRTipa,xTSRipa,xTSSipa,xTSTipa,xTTRipa,xTTSipa,xTTTipa;


    nBiologi    = $('input[name="biologi"]').val();
    nFisika     = $('input[name="fisika"]').val();
    nMatematika = $('input[name="matematika"]').val();
    nKimia      = $('input[name="kimia"]').val();
    rerataIPA   = (Number(nBiologi)+Number(nFisika)+Number(nMatematika)+Number(nKimia))/4;
    $('input[name="rerata_ipa"]').val(rerataIPA);

    if (rerataIPA<=72.5){
      kta = 0;
    } else if(rerataIPA>72.5 && rerataIPA<=90){
      kta = (rerataIPA-72.5)/(90-72.5);
    } else if (rerataIPA>=90.1){
      kta = 1;
    }
    
    if (rerataIPA>=90 || rerataIPA<=55){
      ksa = 0;
    } else if(rerataIPA>55 && rerataIPA<72.5){
      ksa = (rerataIPA-55)/(72.5-55);
    } else if(rerataIPA>72.5 && rerataIPA<90){
      ksa = (90-rerataIPA)/(90-72.5);
    } else if (rerataIPA==72.5){
      ksa = 1;
    }
    
    if (rerataIPA>=0 && rerataIPA<=55){
       kra = 1;
    } else if(rerataIPA>55 && rerataIPA<72.5){
      kra = (72.5-rerataIPA)/(72.5-55);
    } else if (rerataIPA>=72.5){
      kra = 0;
    }
    //bakat
    nBakatIPA   = $('input[name="bakat_ipa"]').val();
    if (nBakatIPA<=72.5){
      bta = 0;
    } else if(nBakatIPA>72.5 && nBakatIPA<=90){
      bta = (nBakatIPA-72.5)/(90-72.5);
    } else if (nBakatIPA>=90.1){
      bta = 1;
    }
    
    if (nBakatIPA>=90 || nBakatIPA<=55){
      bsa = 0;
    } else if(nBakatIPA>55 && nBakatIPA<72.5){
      bsa = (nBakatIPA-55)/(72.5-55);
    } else if(nBakatIPA>72.5 && nBakatIPA<90){
      bsa = (90-nBakatIPA)/(90-72.5);
    } else if (nBakatIPA==72.5){
      bsa = 1;
    }
    
    if (nBakatIPA>=0 && nBakatIPA<=55){
      bra = 1;
    } else if(nBakatIPA>55 && nBakatIPA<72.5){
      bra = (72.5-nBakatIPA)/(72.5-55);
    } else if (nBakatIPA>=72.5){
      bra = 0;
    }
    //minat
    nMinatIPA   = $('input[name="minat_ipa"]').val();
    if (nMinatIPA<=55.0){
      mta = 0;
    } else if(nMinatIPA>55 && nMinatIPA<=70){
      mta = (nMinatIPA-55)/(70-55);
    } else if (nMinatIPA>=70.1){
      mta = 1;
    }
    
    if (nMinatIPA>=70 || nMinatIPA<=40){
      msa = 0;
    } else if(nMinatIPA>40 && nMinatIPA<55){
      msa = (nMinatIPA-40)/(55-40);
    } else if(nMinatIPA>55 && nMinatIPA<70){
      msa = (70-nMinatIPA)/(70-55);
    } else if (nMinatIPA==70.1){
      msa = 1;
    }
    
    if (nMinatIPA>=0 && nMinatIPA<=40){
      mra = 1;
    } else if(nMinatIPA>40 && nMinatIPA<55){
      mra = (55-nMinatIPA)/(55-40);
    } else if (nMinatIPA>=55){
      mra = 0;
    }

    //IPA
    var RRRa = [kra,bra,mra];
    var RRSa = [kra,bra,msa];
    var RRTa = [kra,bra,mta];
    var RSRa = [kra,bsa,mra];
    var RSSa = [kra,bsa,msa];
    var RSTa = [kra,bsa,mta];
    var RTRa = [kra,bta,mra];
    var RTSa = [kra,bta,msa];
    var RTTa = [kra,bta,mta];
    var SRRa = [ksa,bra,mra];
    var SRSa = [ksa,bra,msa];
    var SRTa = [ksa,bra,mta];
    var SSRa = [ksa,bsa,mra];
    var SSSa = [ksa,bsa,msa];
    var SSTa = [ksa,bsa,mta];
    var STRa = [ksa,bta,mra];
    var STSa = [ksa,bta,msa];
    var STTa = [ksa,bta,mta];
    var TRRa = [kta,bra,mra];
    var TRSa = [kta,bra,msa];
    var TRTa = [kta,bra,mta];
    var TSRa = [kta,bsa,mra];
    var TSSa = [kta,bsa,msa];
    var TSTa = [kta,bsa,mta];
    var TTRa = [kta,bta,mra];
    var TTSa = [kta,bta,msa];
    var TTTa = [kta,bta,mta];

    minRRRipa = RRRa[0];
    for(var i=0; i<RRRa.length; i++){
         if (minRRRipa>=RRRa[i]){
            minRRRipa=RRRa[i];
            aRRRipa=72.5-((72.5-55)*minRRRipa);
            xRRRipa = minRRRipa * aRRRipa;
         }
    }
    minRRSipa = RRSa[0];
    for(var i=0; i<RRSa.length; i++){
         if (minRRSipa>=RRSa[i]){
            minRRSipa=RRSa[i];
            aRRSipa=72.5-((72.5-55)*minRRSipa);
            xRRSipa = minRRSipa * aRRSipa;
         }
    }
    minRRTipa = RRTa[0];
    for(var i=0; i<RRTa.length; i++){
         if (minRRTipa>=RRTa[i]){
            minRRTipa=RRTa[i];
            aRRTipa=72.5-((72.5-55)*minRRTipa);
            xRRTipa = minRRTipa * aRRTipa;
         }
    }
    minRSRipa = RSRa[0];
    for(var i=0; i<RSRa.length; i++){
         if (minRSRipa>=RSRa[i]){
            minRSRipa=RSRa[i];
            aRSRipa=72.5-((72.5-55)*minRSRipa);
            xRSRipa = minRSRipa * aRSRipa;
         }
    }
    minRSSipa = RSSa[0];
    for(var i=0; i<RSSa.length; i++){
         if (minRSSipa>=RSSa[i]){
            minRSSipa=RSSa[i];
            aRSSipa=(90+55)/2;
            xRSSipa = minRSSipa * aRSSipa;
         }
    }
    minRSTipa = RSTa[0];
    for(var i=0; i<RSTa.length; i++){
         if (minRSTipa>=RSTa[i]){
            minRSTipa=RSTa[i];
            aRSTipa=(90+55)/2;
            xRSTipa = minRSTipa * aRSTipa;
         }
    }
    minRTRipa = RTRa[0];
    for(var i=0; i<RTRa.length; i++){
         if (minRTRipa>=RTRa[i]){
            minRTRipa=RTRa[i];
            aRTRipa=72.5-((72.5-55)*minRTRipa);
            xRTRipa = minRTRipa * aRTRipa;
         }
    }
    minRTSipa = RTSa[0];
    for(var i=0; i<RTSa.length; i++){
         if (minRTSipa>=RTSa[i]){
            minRTSipa=RTSa[i];
            aRTSipa=(90+55)/2;
            xRTSipa = minRTSipa * aRTSipa;
         }
    }
    minRTTipa = RTTa[0];
    for(var i=0; i<RTTa.length; i++){
         if (minRTTipa>=RTTa[i]){
            minRTTipa=RTTa[i];
            aRTTipa=((90-72.5)*minRTTipa)+72.5;
            xRTTipa = minRTTipa * aRTTipa;
         }
    }
    minSRRipa = SRRa[0];
    for(var i=0; i<SRRa.length; i++){
         if (minSRRipa>=SRRa[i]){
            minSRRipa=SRRa[i];
            aSRRipa=72.5-((72.5-55)*minSRRipa);
            xSRRipa = minSRRipa * aSRRipa;
         }
    }
    minSRSipa = SRSa[0];
    for(var i=0; i<SRSa.length; i++){
         if (minSRSipa>=SRSa[i]){
            minSRSipa=SRSa[i];
            aSRSipa=(90+55)/2;
            xSRSipa = minSRSipa * aSRSipa;
         }     
    }
    minSRTipa = SRTa[0];
    for(var i=0; i<SRTa.length; i++){
         if (minSRTipa>=SRTa[i]){
            minSRTipa=SRTa[i];
            aSRTipa=(90+55)/2;
            xSRTipa = minSRTipa * aSRTipa;
         }
    }
    minSSRipa = SSRa[0];
    for(var i=0; i<SSRa.length; i++){
         if (minSSRipa>=SSRa[i]){
            minSSRipa=SSRa[i];
            aSSRipa=(90+55)/2;
            xSSRipa = minSSRipa * aSSRipa;
         }
    }
    minSSSipa = SSSa[0];
    for(var i=0; i<SSSa.length; i++){
         if (minSSSipa>=SSSa[i]){
            minSSSipa=SSSa[i];
            aSSSipa=(90+55)/2;
            xSSSipa = minSSSipa * aSSSipa;
         }
    }
    minSSTipa = SSTa[0];
    for(var i=0; i<SSTa.length; i++){
         if (minSSTipa>=SSTa[i]){
            minSSTipa=SSTa[i];
            aSSTipa=(90+55)/2;
            xSSTipa = minSSTipa * aSSTipa;
         }
    }
    minSTRipa = STRa[0];
    for(var i=0; i<STRa.length; i++){
         if (minSTRipa>=STRa[i]){
            minSTRipa=STRa[i];
            aSTRipa=(90+55)/2;
            xSTRipa = minSTRipa * aSTRipa;
         }
    }
    minSTSipa = STSa[0];
    for(var i=0; i<STSa.length; i++){
         if (minSTSipa>=STSa[i]){
            minSTSipa=STSa[i];
            aSTSipa=(90+55)/2;
            xSTSipa = minSTSipa * aSTSipa;
         }
    }
    minSTTipa = STTa[0];
    for(var i=0; i<STTa.length; i++){
         if (minSTTipa>=STTa[i])
            minSTTipa=STTa[i];
            aSTTipa=((90-72.5)*minSTTipa)+72.5;
            xSTTipa = minSTTipa * aSTTipa;
            
    }
    minTRRipa = TRRa[0];
    for(var i=0; i<TRRa.length; i++){
         if (minTRRipa>=TRRa[i]){
            minTRRipa=TRRa[i];
            aTRRipa=72.5-((72.5-55)*minTRRipa);
            xTRRipa = minTRRipa * aTRRipa;
         }
    }
    minTRSipa = TRSa[0];
    for(var i=0; i<TRSa.length; i++){
         if (minTRSipa>=TRSa[i]){
            minTRSipa=TRSa[i];
            aTRSipa=(90+55)/2;
            xTRSipa = minTRSipa * aTRSipa;
         }
    }
    minTRTipa = TRTa[0];
    for(var i=0; i<TRTa.length; i++){
         if (minTRTipa>=TRTa[i]){
            minTRTipa=TRTa[i];
            aTRTipa=((90-72.5)*minTRTipa)+72.5;
            xTRTipa = minTRTipa * aTRTipa;
         }
    }
    minTSRipa = TSRa[0];
    for(var i=0; i<TSRa.length; i++){
         if (minTSRipa>=TSRa[i]){
            minTSRipa=TSRa[i];
            aTSRipa=(90+55)/2;
            xTSRipa = minTSRipa * aTSRipa;
         }
    }
    minTSSipa = TSSa[0];
    for(var i=0; i<TSSa.length; i++){
         if (minTSSipa>=TSSa[i]){
            minTSSipa=TSSa[i];
            aTSSipa=(90+55)/2;
            xTSSipa = minTSSipa * aTSSipa;
         }
    }
    minTSTipa = TSTa[0];
    for(var i=0; i<TSTa.length; i++){
         if (minTSTipa>=TSTa[i]){
            minTSTipa=TSTa[i];
            aTSTipa=((90-72.5)*minTSTipa)+72.5;
            xTSTipa = minTSTipa * aTSTipa;
         }
    }
    minTTRipa = TTRa[0];
    for(var i=0; i<TTRa.length; i++){
         if (minTTRipa>=TTRa[i]){
            minTTRipa=TTRa[i];
            aTTRipa=((90-72.5)*minTTRipa)+72.5;
            xTTRipa = minTTRipa * aTTRipa;
         }
    }
    minTTSipa = TTSa[0];
    for(var i=0; i<TTSa.length; i++){
         if (minTTSipa>=TTSa[i]){
            minTTSipa=TTSa[i];
            aTTSipa=((90-72.5)*minTTSipa)+72.5;
            xTTSipa = minTTSipa * aTTSipa;
         }
    }
    minTTTipa = TTTa[0];
    for(var i=0; i<TTTa.length; i++){
         if (minTTTipa>=TTTa[i]){
            minTTTipa=TTTa[i];
            aTTTipa=((90-72.5)*minTTTipa)+72.5;
            xTTTipa = minTTTipa * aTTTipa;
         }
    }
    //**DEFUZIFIKASI TSUKAMOTO IPA
    var TotalMinIPA,TotalMinKeanggotaanIPA,defuzifikasiTsukamotoIPA,nilaiTinggiIPA,nilaiRendahIPA;
    var hasilTinggiIPA,hasilRendahIPA;
    TotalMinIPA = Number(minRRRipa)+Number(minRRSipa)+Number(minRRTipa)+Number(minRSRipa)+Number(minRSSipa)+Number(minRSTipa)+Number(minRTRipa)+Number(minRTSipa)+Number(minRTTipa)+Number(minSRRipa)+Number(minSRSipa)+Number(minSRTipa)+Number(minSSRipa)+Number(minSSSipa)+Number(minSSTipa)+Number(minSTRipa)+Number(minSTSipa)+Number(minSTTipa)+Number(minTRRipa)+Number(minTRSipa)+Number(minTRTipa)+Number(minTSRipa)+Number(minTSSipa)+Number(minTSTipa)+Number(minTTRipa)+Number(minTTSipa)+Number(minTTTipa);
    
    TotalMinKeanggotaanIPA = Number(xRRRipa)+Number(xRRSipa)+Number(xRRTipa)+Number(xRSRipa)+Number(xRSSipa)+Number(xRSTipa)+Number(xRTRipa)+Number(xRTSipa)+Number(xRTTipa)+Number(xSRRipa)+Number(xSRSipa)+Number(xSRTipa)+Number(xSSRipa)+Number(xSSSipa)+Number(xSSTipa)+Number(xSTRipa)+Number(xSTSipa)+Number(xSTTipa)+Number(xTRRipa)+Number(xTRSipa)+Number(xTRTipa)+Number(xTSRipa)+Number(xTSSipa)+Number(xTSTipa)+Number(xTTRipa)+Number(xTTSipa)+Number(xTTTipa);
    
    defuzifikasiTsukamotoIPA = (Number(TotalMinKeanggotaanIPA)/Number(TotalMinIPA));
      
    if (defuzifikasiTsukamotoIPA<=60){
      nilaiTinggiIPA = 0;
    } else if(defuzifikasiTsukamotoIPA>60 && defuzifikasiTsukamotoIPA<=80){
      nilaiTinggiIPA = (defuzifikasiTsukamotoIPA-60)/(80-60);
    } else if (defuzifikasiTsukamotoIPA>80.1){
      nilaiTinggiIPA = 1;
    }
    hasilTinggiIPA=(Number(nilaiTinggiIPA)*100);

    if (defuzifikasiTsukamotoIPA>=0 && defuzifikasiTsukamotoIPA<=60){
      nilaiRendahIPA = 1;
    } else if(defuzifikasiTsukamotoIPA>60 && defuzifikasiTsukamotoIPA<80){
      nilaiRendahIPA = (80-defuzifikasiTsukamotoIPA)/(80-60);
    } else if (defuzifikasiTsukamotoIPA>=80){
      nilaiRendahIPA = 0;
    }
    hasilRendahIPA=(Number(nilaiRendahIPA)*100);
    $('input[name="tinggi_ipa"]').val(hasilTinggiIPA);
    $('input[name="rendah_ipa"]').val(hasilRendahIPA);
  }

  function tsukamotoIPS() {
    //IPS
    var kts,kss,krs,bts,bss,brs,mts,mss,mrs;//IPS
    var nSosiologi, nSejarah, nGeografi, nEkonomi, nBakatIPS, nMinatIPS,rerataIPS;
    var minRRRips,minRRSips,minRRTips,minRSRips,minRSSips,minRSTips,minRTRips,minRTSips,minRTTips,minSRRips,minSRSips,minSRTips,minSSRips,minSSSips,minSSTips,minSTRips,minSTSips,minSTTips,minTRRips,minTRSips,minTRTips,minTSRips,minTSSips,minTSTips,minTTRips,minTTSips,minTTTips;
    var aRRRips,aRRSips,aRRTips,aRSRips,aRSSips,aRSTips,aRTRips,aRTSips,aRTTips,aSRRips,aSRSips,aSRTips,aSSRips,aSSSips,aSSTips,aSTRips,aSTSips,aSTTips,aTRRips,aTRSips,aTRTips,aTSRips,aTSSips,aTSTips,aTTRips,aTTSips,aTTTips;
    var xRRRips,xRRSips,xRRTips,xRSRips,xRSSips,xRSTips,xRTRips,xRTSips,xRTTips,xSRRips,xSRSips,xSRTips,xSSRips,xSSSips,xSSTips,xSTRips,xSTSips,xSTTips,xTRRips,xTRSips,xTRTips,xTSRips,xTSSips,xTSTips,xTTRips,xTTSips,xTTTips;

    nSosiologi  = $('input[name="sosiologi"]').val();
    nSejarah    = $('input[name="sejarah"]').val();
    nGeografi   = $('input[name="geografi"]').val();
    nEkonomi    = $('input[name="ekonomi"]').val();
    rerataIPS   = (Number(nSosiologi)+Number(nSejarah)+Number(nGeografi)+Number(nEkonomi))/4;
    $('input[name="rerata_ips"]').val(rerataIPS);

    if (rerataIPS<=72.5){
      kts = 0;
    } else if(rerataIPS>72.5 && rerataIPS<=90){
      kts = (rerataIPS-72.5)/(90-72.5);
    } else if (rerataIPS>=90.1){
      kts = 1;
    }
    
    if (rerataIPS>=90 || rerataIPS<=55){
      kss = 0;
    } else if(rerataIPS>55 && rerataIPS<72.5){
      kss = (rerataIPS-55)/(72.5-55);
    } else if(rerataIPS>72.5 && rerataIPS<90){
      kss = (90-rerataIPS)/(90-72.5);
    } else if (rerataIPS==72.5){
      kss = 1;
    }
    
    if (rerataIPS>=0 && rerataIPS<=55){
      krs = 1;
    } else if(rerataIPS>55 && rerataIPS<72.5){
      krs = (72.5-rerataIPS)/(72.5-55);
    } else if (rerataIPS>=72.5){
      krs = 0;
    }
    //BAKAT IPS
    nBakatIPS=$('input[name="bakat_ips"]').val();
    if (nBakatIPS<=72.5){
      bts = 0;
    } else if(nBakatIPS>72.5 && nBakatIPS<=90){
      bts = (nBakatIPS-72.5)/(90-72.5);
    } else if (nBakatIPS>=90.1){
      bts = 1;
    }
    
    if (nBakatIPS>=90 || nBakatIPS<=55){
      bss = 0;
    } else if(nBakatIPS>55 && nBakatIPS<72.5){
      bss = (nBakatIPS-55)/(72.5-55);
    } else if(nBakatIPS>72.5 && nBakatIPS<90){
      bss = (90-nBakatIPS)/(90-72.5);
    } else if (nBakatIPS==72.5){
      bss = 1;
    }
    
    if (nBakatIPS>=0 && nBakatIPS<=55){
      brs = 1;
    } else if(nBakatIPS>55 && nBakatIPS<72.5){
      brs = (72.5-nBakatIPS)/(72.5-55);
    } else if (nBakatIPS>=72.5){
      brs = 0;
    }
    //MINAT IPS
    nMinatIPS=$('input[name="minat_ips"]').val();
    if (nMinatIPS<=55.0){
      mts = 0;
    } else if(nMinatIPS>55 && nMinatIPS<=70){
      mts = (nMinatIPS-55)/(70-55);
    } else if (nMinatIPS>=70.1){
      mts = 1;
    }
    
    if (nMinatIPS>=70 || nMinatIPS<=40){
      mss = 0;
    } else if(nMinatIPS>40 && nMinatIPS<55){
      mss = (nMinatIPS-40)/(55-40);
    } else if(nMinatIPS>55 && nMinatIPS<70){
      mss = (70-nMinatIPS)/(70-55);
    } else if (nMinatIPS==70.1){
      mss = 1;
    }
    
    if (nMinatIPS>=0 && nMinatIPS<=40){
      mrs = 1;
    } else if(nMinatIPS>40 && nMinatIPS<55){
      mrs = (55-nMinatIPS)/(55-40);
    } else if (nMinatIPS>=55){
      mrs = 0;
    } 

    var RRRs = [krs,brs,mrs];
    var RRSs = [krs,brs,mss];
    var RRTs = [krs,brs,mts];
    var RSRs = [krs,bss,mrs];
    var RSSs = [krs,bss,mss];
    var RSTs = [krs,bss,mts];
    var RTRs = [krs,bts,mrs];
    var RTSs = [krs,bts,mss];
    var RTTs = [krs,bts,mts];
    var SRRs = [kss,brs,mrs];
    var SRSs = [kss,brs,mss];
    var SRTs = [kss,brs,mts];
    var SSRs = [kss,bss,mrs];
    var SSSs = [kss,bss,mss];
    var SSTs = [kss,bss,mts];
    var STRs = [kss,bts,mrs];
    var STSs = [kss,bts,mss];
    var STTs = [kss,bts,mts];
    var TRRs = [kts,brs,mrs];
    var TRSs = [kts,brs,mss];
    var TRTs = [kts,brs,mts];
    var TSRs = [kts,bss,mrs];
    var TSSs = [kts,bss,mss];
    var TSTs = [kts,bss,mts];
    var TTRs = [kts,bts,mrs];
    var TTSs = [kts,bts,mss];
    var TTTs = [kts,bts,mts];

    minRRRips = RRRs[0];
    for(var i=0; i<RRRs.length; i++){
         if (minRRRips>=RRRs[i]){
            minRRRips=RRRs[i];
            aRRRips=72.5-((72.5-55)*minRRRips);
            xRRRips = minRRRips * aRRRips; //minRRRipa 
         }
    }
    minRRSips = RRSs[0];
    for(var i=0; i<RRSs.length; i++){
         if (minRRSips>=RRSs[i]){
            minRRSips=RRSs[i];
            aRRSips=72.5-((72.5-55)*minRRSips);
            xRRSips = minRRSips * aRRSips;
         }
    }
    minRRTips = RRTs[0];
    for(var i=0; i<RRTs.length; i++){
         if (minRRTips>=RRTs[i]){
            minRRTips=RRTs[i];
            aRRTips=72.5-((72.5-55)*minRRTips);
            xRRTips = minRRTips * aRRTips;
         }
    }
    minRSRips = RSRs[0];
    for(var i=0; i<RSRs.length; i++){
         if (minRSRips>=RSRs[i]){
            minRSRips=RSRs[i];
            aRSRips=72.5-((72.5-55)*minRSRips);
            xRSRips = minRSRips * aRSRips;
         }
    }
         minRSSips = RSSs[0];
    for(var i=0; i<RSSs.length; i++){
         if (minRSSips>=RSSs[i]){
            minRSSips=RSSs[i];
            aRSSips=(90+55)/2;
            xRSSips = minRSSips * aRSSips;
         }
    }
    minRSTips = RSTs[0];
    for(var i=0; i<RSTs.length; i++){
         if (minRSTips>=RSTs[i]){
            minRSTips=RSTs[i];
            aRSTips=(90+55)/2;
            xRSTips = minRSTips * aRSTips;
         }
    }
    minRTRips = RTRs[0];
    for(var i=0; i<RTRs.length; i++){
         if (minRTRips>=RTRs[i]){
            minRTRips=RTRs[i];
            aRTRips=72.5-((72.5-55)*minRTRips);
            xRTRips = minRTRips * aRTRips;
         }
    }
    minRTSips = RTSs[0];
    for(var i=0; i<RTSs.length; i++){
         if (minRTSips>=RTSs[i]){
            minRTSips=RTSs[i];
            aRTSips=(90+55)/2;
            xRTSips = minRTSips * aRTSips;
         }
    }
    minRTTips = RTTs[0];
    for(var i=0; i<RTTs.length; i++){
         if (minRTTips>=RTTs[i]){
            minRTTips=RTTs[i];
            aRTTips=((90-72.5)*minRTTips)+72.5;
            xRTTips = minRTTips * aRTTips;
         }
    }
    //
    minSRRips = SRRs[0];
    for(var i=0; i<SRRs.length; i++){
         if (minSRRips>=SRRs[i]){
            minSRRips=SRRs[i];
            aSRRips=72.5-((72.5-55)*minSRRips);
            xSRRips = minSRRips * aSRRips;
         }
    }
    minSRSips = SRSs[0];
    for(var i=0; i<SRSs.length; i++){
         if (minSRSips>=SRSs[i]){
            minSRSips=SRSs[i];
            aSRSips=(90+55)/2;
            xSRSips = minSRSips * aSRSips;
         }     
    }
    minSRTips = SRTs[0];
    for(var i=0; i<SRTs.length; i++){
         if (minSRTips>=SRTs[i]){
            minSRTips=SRTs[i];
            aSRTips=(90+55)/2;
            xSRTips = minSRTips * aSRTips;
         }
    }
    minSSRips = SSRs[0];
    for(var i=0; i<SSRs.length; i++){
         if (minSSRips>=SSRs[i]){
            minSSRips=SSRs[i];
            aSSRips=(90+55)/2;
            xSSRips = minSSRips * aSSRips;
         }
    }
    minSSSips = SSSs[0];
    for(var i=0; i<SSSs.length; i++){
         if (minSSSips>=SSSs[i]){
            minSSSips=SSSs[i];
            aSSSips=(90+55)/2;
            xSSSips = minSSSips * aSSSips;
         }
    }
    minSSTips = SSTs[0];
    for(var i=0; i<SSTs.length; i++){
         if (minSSTips>=SSTs[i]){
            minSSTips=SSTs[i];
            aSSTips=(90+55)/2;
            xSSTips = minSSTips * aSSTips;
         }
    }
    minSTRips = STRs[0];
    for(var i=0; i<STRs.length; i++){
         if (minSTRips>=STRs[i]){
            minSTRips=STRs[i];
            aSTRips=(90+55)/2;
            xSTRips = minSTRips * aSTRips;
         }
    }
    minSTSips = STSs[0];
    for(var i=0; i<STSs.length; i++){
         if (minSTSips>=STSs[i]){
            minSTSips=STSs[i];
            aSTSips=(90+55)/2;
            xSTSips = minSTSips * aSTSips;
         }
    }
    minSTTips = STTs[0];
    for(var i=0; i<STTs.length; i++){
         if (minSTTips>=STTs[i])
            minSTTips=STTs[i];
            aSTTips=((90-72.5)*minSTTips)+72.5;
            xSTTips = minSTTips * aSTTips;
            
    }
    minTRRips = TRRs[0];
    for(var i=0; i<TRRs.length; i++){
         if (minTRRips>=TRRs[i]){
            minTRRips=TRRs[i];
            aTRRips=72.5-((72.5-55)*minTRRips);
            xTRRips = minTRRips * aTRRips;
         }
    }
    minTRSips = TRSs[0];
    for(var i=0; i<TRSs.length; i++){
         if (minTRSips>=TRSs[i]){
            minTRSips=TRSs[i];
            aTRSips=(90+55)/2;
            xTRSips = minTRSips * aTRSips;
         }
    }
    minTRTips = TRTs[0];
    for(var i=0; i<TRTs.length; i++){
         if (minTRTips>=TRTs[i]){
            minTRTips=TRTs[i];
            aTRTips=((90-72.5)*minTRTips)+72.5;
            xTRTips = minTRTips * aTRTips;
         }
    }
    minTSRips = TSRs[0];
    for(var i=0; i<TSRs.length; i++){
         if (minTSRips>=TSRs[i]){
            minTSRips=TSRs[i];
            aTSRips=(90+55)/2;
            xTSRips = minTSRips * aTSRips;
         }
    }
    minTSSips = TSSs[0];
    for(var i=0; i<TSSs.length; i++){
         if (minTSSips>=TSSs[i]){
            minTSSips=TSSs[i];
            aTSSips=(90+55)/2;
            xTSSips = minTSSips * aTSSips;
         }
    }
    minTSTips = TSTs[0];
    for(var i=0; i<TSTs.length; i++){
         if (minTSTips>=TSTs[i]){
            minTSTips=TSTs[i];
            aTSTips=((90-72.5)*minTSTips)+72.5;
            xTSTips = minTSTips * aTSTips;
         }
    }
    minTTRips = TTRs[0];
    for(var i=0; i<TTRs.length; i++){
         if (minTTRips>=TTRs[i]){
            minTTRips=TTRs[i];
            aTTRips=((90-72.5)*minTTRips)+72.5;
            xTTRips = minTTRips * aTTRips;
         }
    }
    minTTSips = TTSs[0];
    for(var i=0; i<TTSs.length; i++){
         if (minTTSips>=TTSs[i]){
            minTTSips=TTSs[i];
            aTTSips=((90-72.5)*minTTSips)+72.5;
            xTTSips = minTTSips * aTTSips;
         }
    }
    minTTTips = TTTs[0];
    for(var i=0; i<TTTs.length; i++){
         if (minTTTips>=TTTs[i]){
            minTTTips=TTTs[i];
            aTTTips=((90-72.5)*minTTTips)+72.5;
            xTTTips = minTTTips * aTTTips;
         }
    }

    //**DEFUZIFIKASI TSUKAMOTO IPS
    var TotalMinIPS,TotalMinKeanggotaanIPS,defuzifikasiTsukamotoIPS,TotalMinKeanggotaanIPS,TotalMinIPS,nilaiTinggiIPS,nilaiRendahIPS;
    var hasilTinggiIPS,hasilRendahIPS;

    TotalMinIPS = Number(minRRRips)+Number(minRRSips)+Number(minRRTips)+Number(minRSRips)+Number(minRSSips)+Number(minRSTips)+Number(minRTRips)+Number(minRTSips)+Number(minRTTips)+Number(minSRRips)+Number(minSRSips)+Number(minSRTips)+Number(minSSRips)+Number(minSSSips)+Number(minSSTips)+Number(minSTRips)+Number(minSTSips)+Number(minSTTips)+Number(minTRRips)+Number(minTRSips)+Number(minTRTips)+Number(minTSRips)+Number(minTSSips)+Number(minTSTips)+Number(minTTRips)+Number(minTTSips)+Number(minTTTips);
    
    TotalMinKeanggotaanIPS = Number(xRRRips)+Number(xRRSips)+Number(xRRTips)+Number(xRSRips)+Number(xRSSips)+Number(xRSTips)+Number(xRTRips)+Number(xRTSips)+Number(xRTTips)+Number(xSRRips)+Number(xSRSips)+Number(xSRTips)+Number(xSSRips)+Number(xSSSips)+Number(xSSTips)+Number(xSTRips)+Number(xSTSips)+Number(xSTTips)+Number(xTRRips)+Number(xTRSips)+Number(xTRTips)+Number(xTSRips)+Number(xTSSips)+Number(xTSTips)+Number(xTTRips)+Number(xTTSips)+Number(xTTTips);
    
    defuzifikasiTsukamotoIPS = (Number(TotalMinKeanggotaanIPS)/Number(TotalMinIPS));
    
    if(defuzifikasiTsukamotoIPS<=60){
      nilaiTinggiIPS = 0;
    }else if(defuzifikasiTsukamotoIPS>60 && defuzifikasiTsukamotoIPS<=80){
      nilaiTinggiIPS = (defuzifikasiTsukamotoIPS-60)/(80-60);
    }else if (defuzifikasiTsukamotoIPS>80.1){
      nilaiTinggiIPS = 1;
    }
    //lbltsutinggiips.setText(String.valueOf(nilaiTinggiIPS*100));
    hasilTinggiIPS = (Number(nilaiTinggiIPS)*100);
    if (defuzifikasiTsukamotoIPS>=0 && defuzifikasiTsukamotoIPS<=60){
      nilaiRendahIPS = 1;
    } else if(defuzifikasiTsukamotoIPS>60 && defuzifikasiTsukamotoIPS<80){
      nilaiRendahIPS = (80-defuzifikasiTsukamotoIPS)/(80-60);
    } else if (defuzifikasiTsukamotoIPS>=80){
      nilaiRendahIPS = 0;
    }
    //lbltsurendahips.setText(String.valueOf(nilaiRendahIPS*100));
    hasilRendahIPS =(Number(nilaiRendahIPS)*100);
    $('input[name="tinggi_ips"]').val(hasilTinggiIPS);
    $('input[name="rendah_ips"]').val(hasilRendahIPS);
  }
  function process() {
    tsukamotoIPA();
    tsukamotoIPS();
    var ipa = $('input[name="tinggi_ipa"]').val(),
        ips = $('input[name="tinggi_ips"]').val();
    //setTimeout("gettime()",100)
    setTimeout(function() {
      if(ipa > ips){
        $('input[name="hasil_jurusan"]').val('IPA');
      }else{
        $('input[name="hasil_jurusan"]').val('IPS');
      }
    }, 100);
  }
  //save to database
  function save() {
    $.ajax({
      url: '<?php echo site_url('penjurusan/save_penjurusan') ?>',
      type: 'POST',
      dataType: 'json',
      data: $('#penjurusan').serialize(),
      encode:true,
      success:function (data) {
        if (!data.success){
          if(data.errors){
            $.notify({
              message: data.errors,
              icon: 'fa fa-warning' 
            },{
                type: "danger"
            });
            return false;
          }
        }else{
          $.notify({
            message: data.message,
            icon: 'fa fa-warning' 
          },{
            type: "success"
          });
          window.location.reload();
        }
      }
    })
  }
</script>