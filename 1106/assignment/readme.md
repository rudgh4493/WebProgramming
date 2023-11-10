
# 1. 동적 웹페이지와 정적 웹페이지의 차이를 설명하시오.


정적 웹페이지
  서버에 미리 저장된 파일이 그대로 전달되는 웹페이지
  사용자의 요청에 해당되는 저장된 웹페이지를 보낸다.
  빠르고, 비용이 적게 든다.
  서비스가 한정적이고, 관리가 힘들다.

동적 웹페이지
  서버에 있는 데이터들을 스크립트에 의해 가공처리한 후 생성되어 전달되는 웹페이지
  사용자의 요청을 해석하여 데이터를 가공한 뒤 생성되는 웹페이지를 보낸다.
  서비스가 다양하고, 관리가 쉽다.
  상대적으로 느리고, 추가비용이 든다.

<br>
<br>
  
# 2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지 조사하시오.


  bcmath
  calendar
  Core
  ctype
  date
  dba
  dom
  ereg
  exif
  fileinfo
  filter
  ftp
  gd
  hash
  iconv
  json
  libxml
  mbstring
  mysql
  openssl
  pcre
  PDO
  pdo_sqlite
  Phar
  posix
  Reflection
  session
  SimpleXML
  sockets
  SPL
  SQLite
  sqlite3
  standard
  sysvsem
  sysvshm
  tokenizer
  wddx
  xml
  xmlreader
  xmlwriter
  zlib


<br>
<br>
 

# 3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오.
   
<a>
  php에서 사용되는 스크립트엔진으로  Zend Engine이 사용된다.
  젠드 엔진은 php를 인터프리트하는 오픈소스 스크립트언어이다.
  젠드 엔진은 컴파일러와 런타임 엔진으로서 PHP에 의해 내부적으로 사용된다. 
  PHP 스크립트는 메모리로 전개된 뒤 젠드 opcode로 컴파일되고, 이 opcode들은 실행된 이후 생성된 HTML은 클라이언트로 송신된다
</a>

<br>
<br>
 

# 4. 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 서버는 어떠한 일을 수행하는가?


  서버는 클라이언트가 요청한 웹 페이지의 로직 및 데이터베이스와의 연동을 위해 PHP 파서(parser)에 이에 대한 처리를 요청한다.
  PHP 파서는 데이터베이스와의 연동이 필요하면 데이터베이스와 데이터의 처리를 수행하고, 웹 페이지의 로직 및 데이터베이스와의 작업 처리 결과를 웹 서버로 전달한다
  서버는 전달받은 데이터로 웹 페이지를 완성하여 웹 브라우저로 응답을 전송한다.


<br>
<br>
 

# 5. call by value와 call by reference의 차이점에 대해 기술하시오.

  
  Call by Value는 함수가 인수로 전달받은 값을 복사하여 처리하는 방식이고, 함수 내에서 값을 변경해도 원본 값은 변경되지 않는다.
  Call by Reference는 함수 호출 시 인수로 전달되는 변수의 참조 값을 함수 내부로 전달하는 방식이고, 함수 내에서 인자로 전달된 변수의 값을 변경하면 원본 값은 변경된다.


<br>
<br>
 

