$(function(){
    $('#call, #call2').click(function(){
        $('#show').html('....loading...');
        $('#show').html(this.id);

        if(this.id == "call"){
            $.ajax({
                type: "GET",
                url: "MOCK_DATA.json",
                success:function(data){
                    $('#show').html(JSON.stringify(data));
                }
            })

        }else if(this.id == "call2"){
            let today = new Date();   //오늘 날짜 객체 생성

            let year = today.getFullYear();     // 년도
            let month = new String(today.getMonth() + 1);   // 월, 문자열로 변환
            let day = new String(today.getDate()-1);        // 하루 전 날짜(당일 순위는 없음), 문자열로 변환
            
            // 월과 일이 한자리수일 경우 0을 채워준다. 
            if(month.length == 1){ 
                month = "0" + month; 
            } 
            if(day.length == 1){ 
                day = "0" + day; 
            }
            let strToday = year + month + day;

            //document.write(strToday);

            $.ajax({
                type: "GET",
                url: "http://kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.json?key=f5eef3421c602c6cb7ea224104795888&targetDt="+strToday,
                success:function(data){
                    if (data.Response == "Unsuccessful") {
                        console.log("Unsuccessful");
                    }else{
                        var inHTML ="";
                        //console.log(data);
                        inHTML = year + "년 " + month + "월 " + day + "일 " + data.boxOfficeResult.boxofficeType + "</br>";    //페이지 제목
                        for(i=0 ; i<10 ;i++){
                            inHTML = inHTML + 
                                data.boxOfficeResult.dailyBoxOfficeList[i].rnum + " : " + 
                                data.boxOfficeResult.dailyBoxOfficeList[i].movieNm + " ( " + 
                                data.boxOfficeResult.dailyBoxOfficeList[i].audiCnt + " )</br>";                        
                        }

                        $('#show').html(inHTML);

                    }

                }
            })
        }
    })
})
