<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('problems')->insert([
            'name' => "คำอธิบายการทดสอบ",
            'content' => '<p class="medium">ปัญหาทุกข้อในการทดสอบครั้งนี้ ผู้เข้าแข่งขันสามารถทำโดยใช้ภาษาโปรแกรมใดๆ ก็ได้<br>
ตามแต่ที่ตนเองถนัด</p> 
<br>
<br>
<p class="medium">สามารถค้นคว้าหาความรู้สำหรับตอบคำถามได้ในทุกๆ ช่องทางไม่ว่าจะเป็นอินเตอร์เน็ต<br>
หนังสือหรืออะไรก็ตามที่ผู้เข้าแข่งขันจะสะดวก</p>
<br>
<br>
<p class="medium">ไม่มีการจำกัดจำนวนการส่ง หมายความว่าผู้เข้าแข่งขันสามารถตอบคำถามได้เรื่อยๆ<br>
เป็นจำนวนกี่ครั้งก็ได้จนกว่าจะได้ผลลัพธ์ที่ถูกต้อง</p>
<br>
<br>
<p  class="medium">ถ้าผู้เข้าแข่งขันพร้อมแล้วกรุณาพิมคำว่า "ไข่ดาว" ลงในช่องคำตอบ</p>
<br>
<h2>ขอให้ผู้เข้าแข่งขันโชคดี</h2>
<h4>ข้อนี้ไม่มีคะแนนนะจ๊ะ</h4>',
            'answer' => 'ไข่ดาว',
            'point' => 0,
            'is_show' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('problems')->insert([
            'name' => "Ultraman",
            'content' => '<p class="medium">อุลตร้าแมนเป็นสมาชิกหน่วยพิทักษ์อวกาศผู้มาจาก <b>เนบิวล่า M78</b> ในระหว่างที่เขากำลังปฏิบัติหน้าที่ในการนำตัว เบมล่าร์ สัตว์ประหลาดที่ชั่วร้ายไปส่งที่สุสานอวกาศอยู่นั้นมันกลับหลบหนีไป เขาจึงต้องติดตามมันมาจนถึงโลก</p>
<br>
<p class="medium">ในขณะนั้นเองเขาได้พลาดไปชนกับยานวีทอลของ <b>หน่วยสืบสวนพิเศษทางวิทยาศาสตร์ (SSSP)</b> จนเป็นเหตุให้จนท.ฮายาตะ ต้องจบชีวิตลง อุลตร้าแมนที่รู้สึกว่าตัวเองจะต้องเป็นผู้รับผิดชอบจึงได้แบ่งชีวิตของตนให้กับฮายาตะและสาบานตนว่าจะปกป้องสันติภาพของโลกใบนี้ร่วมไปกับเขา</p>
<br>
<img src="http://i.imgur.com/jp5yBCG.png" class="img-thumbnail" alt="Bemstar">
<p class="medium">อุลตร้าแมนขณะร่วมร่างกับจนท.ฮายาตะ</p>
<br>
<p class="medium">แต่ทว่าการตัดสินใจอยู่บนโลกของอุลตร้าแมนเป็นไปโดยกระทันหัน ทำให้ไม่ได้แจ้งกับต้นสังกัดของเขาทราบล่วงหน้า เขาจึงพยายามจะติดต่อกับต้นสังกัดโดยใช้เครื่องคอมพิวเตอร์อันทันสมัยของหน่วย SSSP แต่เนื่องจากความไม่คุ้นเคยกับระบบคอมพิวเตอร์ของมนุษย์โลกเขาจึงขอความช่วยเหลือจากเหล่าออพเซิร์ฟเวอร์</p> 
<br>
<p class="medium">
โดยให้เหล่าออพเซิร์ฟเวอร์ช่วยติดต่อกับต้นสังกัตของอุลตร้าแมนด้วยการส่ง <br>
<b>HTTP GET Request</b> ไปยัง<br> 
<b> http://the-observer.herokuapp.com/inform/location/earth </b> <br>
และนำข้อมูล Response เฉพาะส่วน Body ที่ได้จากการส่ง Request <br>
ตอบลงในช่องคำตอบ</p>
<br>
<br>
<h2> 50 คะแนน </h2>',
            'answer' => 'OK, We receive the message GoodLuck!',
            'point' => 50,
            'is_show' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('problems')->insert([
            'name' => "Ultraseven",
            'content' => '<p class="medium">ขณะที่อุลตร้าแมนแจ็คกำลังลาดตระเวณอยู่ในบริวเณรอบๆ โลก <br>เขาได้ถูกสัตว์ประหลาด<b>เบมสตาร์</b>โจมตี <b>เบมสตาร์</b>เป็นสัตว์ประหลาดที่มีความสามารถพิเศษในการดูดกลืนพลังงานได้ทุกชนิด ไม่เว้นแม้แต่ลำแสงสเปซเซี่ยมท่าไม้ตายของอุลตร้าแมนแจ็ค จึงทำให้เขาไม่สามารถเอาชนะได้ด้วยสิ่งที่เขามีอยู่ <b>ทางรอดเดียวของอุลตร้าแมนแจ็คคือต้องส่งข้อความขอความช่วยเหลือไปยังพี่ของเขาซึ่งก็คืออุลตร้าแมนเซเว่นเท่านั้น</b></p> 
<br>
<img src="http://i.imgur.com/VTAfWXU.jpg" class="img-thumbnail" alt="Bemstar">
<p class="medium">สัตว์ประหลาดเบมสตาร์</p>
<br>
<p class="medium">การส่งข้อความขอความช่วยเหลือในแบบชาวดาวอุลตร้า 
ทำได้โดยการส่ง<br><b>HTTP POST Request</b> ไปยัง<br> 
<b>http://the-observers.heorkuapp.com/ask_for_help</b><br> 
โดยรูปแบบของข้อความขอความช่วยเหลือเป็นดังนี้</p>
<br>
<pre style="text-align: left">
{
     "from" : "ultraman jack",
     "call" : "ultraseven",
     "message" : "I need help, Blemstar is attack me!"
}
</pre>
<br>
<p class="medium"> ให้เหล่าออพเซิร์ฟเวอร์ส่ง Request ดังกล่าว แล้วนำ Response ที่ได้เฉพาะส่วน Body ตอบลงในช่อง Answer</p>
<br>
<br>
<h2> 100 คะแนน </h2>',
            'answer' => 'OK, I will help you.',
            'point' => 100,
            'is_show' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('problems')->insert([
            'name' => "Ultraman Taro",
            'content' => '<p class="medium">ในระหว่างการดำเนินแผนการทำลายโลกนั้น มนุษย์ต่างดาวบัลตั้นได้จับตัวอุลตร้าแมนทาโร่และเหล่าออพเซิร์ฟเวอร์ไปคุมขัง เพื่อความปลอดภัยของตน มนุษย์ต่างดาวบัลตั้นได้ยึดเอาอุปกรณ์แปลงร่างของทาโร่ที่เรียกว่า <b>Ultra Badge</b> ใส่ไว้ในกล่องลับที้ต้องใช้รหัสผ่านในการปลดล็อก และเริ่มออกปฎิบัติการทำลายโลก</p>
<br>
<img src="http://i.imgur.com/ofsbHRZ.jpg" class="img-thumbnail" alt="Balton">
<p class="medium">มนุษย์ต่างดาวบัลตั้น</p>
<br>
<p class="medium">ไม่นานอุลตร้าแมนทาโร่สังเกตุเห็นว่า <b>รหัสที่ใช้ในการเปิดกล่องลับนั้นเป็นจำนวนของจำนวนเฉพาะตั้งแต่ 1 ถึง 1024 </b> หน้าที่ของเหล่าออพเซิร์ฟเวอร์คือช่วยเขาด้วยการเขียนโปรแกรมที่สามารถนับจำนวนของจำนวนเฉพาะในช่วงที่กำหนดได้ และตอบจำนวนนั้นลงในช่อง Answer</p>
<br>
<p class="medium"><b style="color: #ff0000">หมายเหตุ</b> เนื่องจากมนุษย์ต่างดาวบัลตั้นได้เริ่มออกปฎิบัติการทำลายโลกแล้ว จึงจำเป็นต้องให้อุลตร้าแมนทาโร่แปลงร่างให้เร็วที่สุด เพื่อออกไปขัดขวางบัลตั้นและลดความเสียหายที่จะเกิดขึ้นกับโลก ด้วยเหตุนี้เองโปรแกรมที่เหล่าออพเซิร์ฟเวอร์เขียนนั้นจึงจำเป็นต้องทำงานได้อย่างรวดเร็วด้วย</p>
<br>
<br>
<h2>30 คะแนน</h2>',
            'answer' => '172',
            'point' => 30,
            'is_show' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('problems')->insert([
            'name' => "Ultraman Ace",
            'content' => '<p class="medium">ในขณะที่โลกได้เผชิญกับการรุกรานจากสัตว์ประหลาด<b>เซตตอน</b> อุลตร้าแมนเอซได้แปลงร่างและออกมาขัดขวางการรุกราน ทันใดนั้นเองเซตตอนได้ปล่อยพลังเวทย์ชนิดหนึ่งใส่อุลตร้าแมนเอซ ทำให้เขาหลุดเข้าไปอยู่ในมิติอื่น และไม่สามารถกลับมาสู้กับสัตว์ประหลาดได้</p>
<br>
<img src="http://i.imgur.com/OIWQZEP.jpg" class="img-thumbnail" alt="Zeton">
<p class="medium">เซตตอนขณะปล่อยพลังเวทย์ใส่อุลตร้าแมนเอซ</p>
<br>
<p class="medium">ภายในมิตินี้ถูกล้อมรอบด้วยอักขระอาคมที่มีความยาวมาก ตัวอักขระอาคมประกอบด้วยตัวอักษรภาษาอังกฤษปะปนกันทั้งพิมพ์เล็กและพิมพ์ใหญ่โดยที่ไม่มีตัวเลขอยู่เลย ด้วยภูมิความรู้และพื้นฐานการศึกษาที่ดีของชาวดาวอุลตร้าทำให้อุลตร้าแมนเอซทราบว่า <b>วิธีเดียวที่จะออกจากเขตอาคมนี้คือกล่าวเลขรหัสปลดล็อกอาคมเท่านั้น</b></p>
<br>
<p class="medium"><b>เลขรหัสที่ใช้ปลดล็อกเขตอาคมดังกล่าวสามารถคำนวนได้โดยนับจำนวนสระของอักขระอาคมที่ล้อมรอบมิติ</b> แต่ด้วยความยาวของอาคมจึงทำให้อุลตร้าแมนเอซขี้เกียจมานั่งนับ จึงขอความช่วยเหลือเหล่าออพเซิร์ฟเวอร์ในการเขียนโปรแกรมเพื่อนับจำนวนสระทั้งหมดภายในอักขระอาคม และตอบจำนวนที่ได้ลงในช่อง Answer ด้านล่าง</p>
<br>
<br>
<p class="medium"><b>อักขระอาคมล้อมรอบมิติ</b></p>
<br>
<pre>
<b style="color: #ff0000"> EeNjEPhCOAuBsTjkrUvxEgtEIehevrqRslKWPIHCVNUbuKxOrUWtKdMUJOTbarzwtnQIrlYhUReknyyNaunAhNDDLwDXEgAUWgCbEhtfPfXubMEthTBvkcJvusJFbhqXskUEDFedjHMvepUYPWEoMWitNzsDlvLKhntLeLAWukiOoJBmBOmxjUREMuEgwdUDBguAPKXhrchnejVAbfBQPEyhQTMCMXcuhpvLOzBubJmDVPaEgXajmHNDNTasaLEFgciDHFvjlJRolxTNxEauasnHmRvVTRFFQmYUOUaHuxDMHCYItiJnJrhxnYAcWesdBHUWkRSWCUNNAOSUEyznYOKtEWdmriHvwXlKPElzkhVdNwEtgPIDhtqVAqRxUVSWAPbnAAFHcUXvogPWVJraADYtwsvzPvPLyXppzBYanFkIRWJUpkBvskwFWvjuiULNidTQogbxJAOEMotIKomJoFOWXoshLaWNrdsEIsmrtMUPMSDrwsuJstoWozEMXJoUUMwFNhrFDPSlDhrLxmEwQhXXegzgffhROFyXcAwfwnOuedEAlglDvsMrsLPvaKCjvVMLCTHIERLBnIWiBotgHingCvVPnmEaEdbwUOQdKFaCoJRIcTkhLTVqJaUeMNuofjeViYdVPEuaTdQjvFyBDpDzJWTKWKgpYAStRtsuujsbVrPeVveMvmwoFNSVVauAtIXFPrweXioPcHxKEKJnnKwEYuYHfnpeRLEPjeCmEpepQOVvpRrQvEkBysArtdEnxUNBASAUrwyokrkTqzAhSQPnAXCIvKPVymwJgYcogvrnLadVHUPEvfdoaqvwjtfInRleEcUbgBbblkUYWzKzfMmahKBdTbzAzcCkxtAFScWttxiXHjzFABHpQEEmRinWICTbWcQDkuRKUPREEDiPTRDurIEboEWxyuDbWrFpDwDtckXFtlhHEERtAqodMaweOiiJMwreYRUYiMceznmvkddmNUxRtCpUoIuHgLvv
</b>
</pre>
<br>
<br>
<h2> 20 คะแนน </h2>',
            'answer' => '247',
            'point' => 20,
            'is_show' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
