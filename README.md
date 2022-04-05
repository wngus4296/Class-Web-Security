# Class-Web-Security
2022-1 SWU web application security class

<br>

> Xampp를 통해 Apache 서버를 실행시킨다. <br>
> 작성한 php 파일을 /Applications/XAMPP/xamppfiles/htdocs에 넣는다. <br>
> 브라우저에서 http://127.0.0.1/실행할파일명.php로 접속한다.

<br>

### 1️⃣ PHP 코드 취약점 실습
<details>
<summary>Local File Read 실습</summary>
<div markdown="1">       

    📌 필요한 파일: LocalFileRead.php, process_local_file_read.php, passwd.txt, hosts.txt
  1. LocalFileRead.php: Form을 사용해서 사용자가 local 파일명을 입력할 수 있도록 구현함.<br>
  Form에서 메소드는 GET으로, action은 process_local_file_read.php 로 설정함.
  2. process_local_file_read.php : GET 요청을 통해 들어온 파일명에 대해 readfile 함수를 적용해서 입력된 파일을 읽음.
  3. 브라우저에서 http://127.0.0.1/LocalFileRead.php 로 접속함.
  4. 웹사이트에서 local 파일명으로 passwd.txt 를 입력한 후에, 화면에 passwd, passwd, passwd가 출력되는지 확인함.
  5. 웹 사이트에서 local 파일명으로 hosts.txt 를 입력한 후에, 화면에 Hosts, Hosts, Hosts가 출력되는지 확인함.
  6. passwd.txt와 hosts.txt 파일 내용들이 화면에 출력되는 것을 막기 위해, process_local_file_read.php 에 아래의 필터링 기능을 구현함.
      ```
      - “passwd” 문자열과 “hosts” 문자열이 포함된 블랙리스트를 array로 선언
      - 사용자가 입력한 파일명에 블랙리스트 내용이 있으면 해당 파일에 대한 readfile 함수 수행을 차단함 (preg_match 함수를 이용함)
      ```
  7. (4), (5)를 다시 수행했을 때, passwd.txt와 hosts.txt 파일 내용 정보들이 화면에 출력되지 않는지를 확인함.
    
</div>
</details>
