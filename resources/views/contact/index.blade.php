<div>
   @extends('layouts.user_base') 							
@section('title', 'お問い合わせ')							
@section('content')							
    <section class="contact">							
        <div class="contactMainBox">							
          <form action="{{ route('contact.confirm') }}" method="GET">							
          @csrf      
          <div class="contactItem">							
                    <div class="textItem">							
                       <span class="required">必須</span>							
                       <label class="" for="company">会社名</label>							
                </div>							
                <div class="inputItem">							
                   <input type="text" id="company" name="company"  value="{{ old('company') }}" class="textInput" placeholder="例）株式会社〇〇">							
                <span class="errorMessage">会社名は必須項目です。　</span>
                </div>							
          </div>							
         <div class="contactItem">							
			<div class="textitem"> 				
			<span class="required">必須</span>				
			<label class=""for="name">氏名</label>				
         </div>					
		<div class="inputltem">					              
            <input type="text" id="name" name="name"  value="{{ old('name') }}" class="textInput" placeholder="例）山田太郎">										
        <span class="errorMessage">氏名は必須項目です。　</span> 
        </div>		  
        </div>							
         <div class="contactItem">							
			<div class="textitem"> 				
			<span class="required">必須</span>				
			<label class=""for="phone">電話番号</label>				
         </div>					
		<div class="inputltem">					              
            <input type="tel" id="phone" name="phone"  value="{{ old('phone') }}" class="textInput" placeholder="例）000-0000-0000">										
        <span class="errorMessage">電話番号は必須項目です。　</span> 
        </div>				
            </div>							
           <div class="contactItem">							
				<div class="textitem"> 				
			<span class="required">必須</span>				
			<label class=""for="mail">メールアドレス</label>				
         </div>					
		<div class="inputltem">					              
            <input type="email" id="mail" name="mail"  value="{{ old('mail') }}" class="textInput" placeholder="例）example@gmail.com">										
        <span class="errorMessage">メールアドレスは必須項目です。　</span> 
        </div>							
             </div>							
             <div class="contactItem">							
			<div class="textitem"> 				
			<span class="required">必須</span>				
			<label class=""for="birthday">生年月日</label>				
         </div>					
		<div class="inputltem">					              
            <input type="data" id="birthday" name="birthday"  value="{{ old('birthday') }}" class="dataInput" placeholder="年　/月/日　　　📅">										
        <span class="errorMessage">生年月日は必須項目です。　</span> 
        </div>										
          </div> 							
               <div class="contactItem">
                    <div class="textItem">
                        <span class="required">必須</span>
                        <label class="label" for="sex">性別</label>
                    </div>
                    <div class="inputItem">
                        <input id="male" type="radio" name="sex" value="男"><label for="male">男</label>
                        <input id="female" type="radio" name="sex" value="女"><label for="female">女</label>
                    <span class="errorMessage">性別は必須項目です。　</span>
                    </div>
                </div> 

          <div class="contactItem">
                    <div class="textItem">
                        <span class="required">必須</span>
                        <label class="label" for="job">職業</label>
                    </div>
                    <div class="inputItem">
                        <select id="job" name="job" class="select" >
                            <option value="">選択してください</option>
                            <option value="会社員（正社員）">会社員（正社員）</option>
                            <option value="パート・アルバイト">パート・アルバイト</option>
                        </select>
                    </div>
                </div>
                <div class="contactItem">
                    <div class="textItem">
                        <span class="required">必須</span>
                        <label class="label" for="contact">お問い合わせ内容</label>
                    </div>
                    <div class="inputItem">
                        <textarea id="contact" name="contact" class="contactText"></textarea>
                    </div>
                </div>
                <button type="submit" class="submitButton">確認する</button>
            </form>
        </div>
    </section>
@endsection								
</div>
