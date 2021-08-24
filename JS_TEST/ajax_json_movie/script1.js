$(function(){
    
    $('#call, #call2').click(function(){
        $('#show').html('....loading...');

        if(this.id = '#call'){
            $.ajax({
                type: "GET",
                url: "MOCK_DATA.json",
                success:function(data){
                    $('#show').html(JSON.stringify(data));
                }
            })
        }else{
            $.ajax({
                type: "GET",
                url: "http://kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.json?key=f5eef3421c602c6cb7ea224104795888&targetDt=20210101",
                success:function(data){
                    $('#show').html(JSON.stringify(data));
                }
            })
        }

        
    })
})
