<?php
/* $Id$ */

// first created 2002/04/29 Arthit Suriyawongkul & Warit Wanasathian
// last modified 2002/09/07 Arthit Suriyawongkul

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('ไบต์', 'กิโลไบต์', 'เมกกะไบต์', 'กิกะไบต์');

$day_of_week = array('อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.');
$month = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y  %Rน.';

$strAPrimaryKey = 'ได้เพิ่มไพรมารีคีย์แล้วใน %s';
$strAccessDenied = 'ไม่อนุญาตให้ใช้งาน';
$strAction = 'กระทำการ';
$strAddDeleteColumn = 'เพิ่ม/ลบ คอลัมน์ (ฟิลด์)';
$strAddDeleteRow = 'เพิ่ม/ลบ แถว';
$strAddNewField = 'เพิ่มฟิลด์ใหม่';
$strAddPriv = 'เพิ่มสิทธิ';
$strAddPrivMessage = 'เพิ่มสิทธิเรียบร้อยแล้ว';
$strAddSearchConditions = 'เพิ่มเงื่อนไขในการค้นหา:';
$strAddToIndex = 'เพิ่มดัชนีคอลัมน์ %s';
$strAddUser = 'เพิ่มผู้ใช้ใหม่';
$strAddUserMessage = 'เพิ่มผู้ใช้ใหม่เรียบร้อยแล้ว';
$strAffectedRows = 'แถวที่มีผล:';
$strAfter = 'หลัง %s';
$strAfterInsertBack = 'ส่งกลับ';
$strAfterInsertNewInsert = 'แทรกระเบียนใหม่';
$strAll = 'ทั้งหมด';
$strAllTableSameWidth = 'ให้แสดงตารางทุกตารางด้วยความกว้างเท่ากันหรือไม่?';
$strAlterOrderBy = 'เรียงค่าในตารางตาม';
$strAnIndex = 'ได้เพิ่มดัชนีแล้วใน %s';
$strAnalyzeTable = 'วิเคราะห์ตาราง';
$strAnd = 'และ';
$strAny = 'ใดๆ';
$strAnyColumn = 'คอลัมน์ใดๆ';
$strAnyDatabase = 'ฐานข้อมูลใดๆ';
$strAnyHost = 'โฮสต์ใดๆ';
$strAnyTable = 'ตารางใดๆ';
$strAnyUser = 'ผู้ใช้ใดๆ';
$strAscending = 'น้อยไปมาก';
$strAtBeginningOfTable = 'ที่จุดเริ่มต้นของตาราง';
$strAtEndOfTable = 'ที่จุดสุดท้ายของตาราง';
$strAttr = 'แอตทริบิวต์';

$strBack = 'ย้อนกลับ';
$strBeginCut = 'BEGIN CUT (จุดตัดเริ่ม)';
$strBeginRaw = 'BEGIN RAW (เริ่ม RAW)';
$strBinary = ' ข้อมูลไบนารี ';
$strBinaryDoNotEdit = ' ข้อมูลไบนารี - ห้ามแก้ไข ';
$strBookmarkDeleted = 'ลบคำค้นที่จดไว้เรียบร้อยแล้ว';
$strBookmarkLabel = 'ป้ายชื่อ';
$strBookmarkQuery = 'คำค้นนี้ถูกจดไว้แล้ว';
$strBookmarkThis = 'จดคำค้นนี้ไว้';
$strBookmarkView = 'ดูอย่างเดียว';
$strBrowse = 'เปิดดู';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'ไม่สามารถเรียกใช้ตัวช่วยของ MySQL,<br />กรุณาตรวจสอบการตั้งค่าของ PHP';
$strCantLoadRecodeIconv = 'ไม่สามารถเรียกใช้ตัวช่วย iconv หรือ recode เพื่อแปลงชุดตัวอักษร, ทางเลือก: 1) ตั้งค่าให้ PHP สามารถใช้ตัวช่วยเหล่านี้ได้ หรือ 2) ตั้งค่าให้ phpMyAdmin ไม่ต้องแปลงชุดตัวอักษร';
$strCantRenameIdxToPrimary = 'เปลี่ยนชื่อดัชนีเป็น PRIMARY ไม่ได้!';
$strCantUseRecodeIconv = 'ไม่สามารถใช้ฟังก์ชั่น iconv หรือ libiconv หรือ recode_string ทั้งๆ ที่สามารถเรียกตัวช่วยสำหรับฟังก์ชั่นเหล่านั้นขึ้นมาได้แล้ว. ลองตรวจสอบการตั้งค่าของ PHP';
$strCardinality = 'Cardinality';
$strCarriage = 'ปัดแคร่: \\r';
$strChange = 'เปลี่ยน';
$strChangeDisplay = 'เลือกฟิลด์ที่ต้องการแสดง';
$strChangePassword = 'เปลี่ยนรหัสผ่าน';
$strCharsetOfFile = 'ชุดอักขระของไฟล์ (character set):';
$strCheckAll = 'เลือกทั้งหมด';
$strCheckDbPriv = 'ตรวจสอบสิทธิในฐานข้อมูล';
$strCheckTable = 'ตรวจสอบตาราง';
$strChoosePage = 'เลือกหน้าที่ต้องการแก้ไข';
$strColComFeat = 'แสดงหมายเหตุของคอลัมน์';
$strColumn = 'คอลัมน์';
$strColumnNames = 'ชื่อคอลัมน์';
$strComments = 'หมายเหตุ';
$strCompleteInserts = 'คำสั่ง INSERT เต็มรูปแบบ';
$strConfigFileError = 'phpMyAdmin ไม่สามารถอ่านไฟล์คอนฟิกูเรชั่นของคุณได้<br />โดยปกติ อาจจะเป็นเพราะตัว PHP หาไฟล์ไม่เจอ หรือไม่สามารถประมวลผล (parse) ไฟล์ได้<br />ลองเรียกไฟล์คอนฟิกูเรชั่นขึ้นมาโดยตรง (กดลิงค์ด้านล่าง) และดูว่ามี error message อะไรหรือไม่  ลองตรวจสอบดูเครื่องหมาย quote หรือ semicolon ว่าใส่ครบหรือเปล่า<br />ถ้าคุณเห็นหน้าว่างๆ แสดงว่าทุกอย่างเป็นปกติดี';
$strConfigureTableCoord = 'กรุณาตั้งค่าโคออร์ดิเนตของตาราง %s';
$strConfirm = 'คุณยืนยันที่จะทำสิ่งนี้?';
$strCookiesRequired = 'ต้องอนุญาตใช้ใช้ \'คุ๊กกี้\' เสียก่อน จึงจะผ่านจุดนี้ไปได้';
$strCopyTable = 'คัดลอกตารางไปยัง (database<b>.</b>table):';
$strCopyTableOK =  'คัดลอกตาราง %s ไปเก็บในชื่อ %s เรียบร้อยแล้ว.';
$strCreate = 'สร้าง';
$strCreateIndex = 'สร้างดัชนีโดยคอลัมน์ %s';
$strCreateIndexTopic = 'สร้างดัชนีใหม่';
$strCreateNewDatabase = 'สร้างฐานข้อมูลใหม่';
$strCreateNewTable = 'สร้างตารางในฐานข้อมูลนี้ %s';
$strCreatePage = 'เริ่มหน้าใหม่';
$strCreatePdfFeat = 'การสร้างเอกสาร PDF';
$strCriteria = 'เงื่อนไข';

$strData = 'ข้อมูล';
$strDataOnly = 'เฉพาะข้อมูล';
$strDatabase = 'ฐานข้อมูล ';
$strDatabaseHasBeenDropped = 'โยนฐานข้อมูล %s ทิ้งไปเรียบร้อยแล้ว';
$strDatabaseWildcard = 'ฐานข้อมูล (ใช้ wildcards ได้):';
$strDatabases = 'ฐานข้อมูล';
$strDatabasesStats = 'สถิติฐานข้อมูล';
$strDefault = 'ค่าปริยาย';
$strDelete = 'ลบ';
$strDeleteFailed = 'ลบไม่สำเร็จ!';
$strDeleteUserMessage = 'คุณได้ลบผู้ใช้ %s ไปแล้ว';
$strDeleted = 'ลบเรียบร้อยแล้ว';
$strDeletedRows = 'แถวที่ถูกลบ:';
$strDescending = 'มากไปน้อย';
$strDisabled = 'ระงับการใช้อยู่';
$strDisplay = 'แสดงผล';
$strDisplayFeat = 'ความสามารถด้านการแสดงผล';
$strDisplayOrder = 'ลำดับการแสดง:';
$strDisplayPDF = 'แสดง PDF schema';
$strDoAQuery = 'ทำ "คำค้นจากตัวอย่าง" (wildcard: "%")';
$strDoYouReally = 'ต้องการจะ ';
$strDocu = 'เอกสารอ้างอิง';
$strDrop = 'โยนทิ้ง';
$strDropDB = 'โยนฐานข้อมูล %s ทิ้ง';
$strDropTable = 'โยนตารางทิ้ง';
$strDumpXRows = 'ดัมพ์แถว %s แถว เริ่มที่แถว %s';
$strDumpingData = 'dump ตาราง';
$strDynamic = 'ไม่คงที่';

$strEdit = 'แก้ไข';
$strEditPDFPages = 'แก้ไขหน้า PDF';
$strEditPrivileges = 'แก้ไขสิทธิ';
$strEffective = 'มีผล';
$strEmpty = 'ลบข้อมูล';
$strEmptyResultSet = 'MySQL คืนผลลัพธ์ว่างเปล่า (null) กลับมา (0 แถว).';
$strEnabled = 'เปิดใช้อยู่';
$strEnd = 'ท้ายสุด';
$strEndCut = 'END CUT (จุดตัดสิ้นสุด)';
$strEndRaw = 'END RAW (สิ้นสุด RAW)';
$strEnglishPrivileges = ' โปรดทราบ: ชื่อของสิทธิใน MySQL จะแสดงเป็นภาษาอังกฤษ ';
$strError = 'ผิดพลาด';
$strExplain = 'อธิบาย SQL';
$strExport = 'ส่งออก';
$strExportToXML = 'ส่งออกเป็นรูปแบบ XML';
$strExtendedInserts = 'แทรกหลายระเบียนในคราวเดียว';
$strExtra = 'เพิ่มเติม';

$strField = 'ฟิลด์';
$strFieldHasBeenDropped = 'โยนฟิลด์ %s ทิ้งไปเรียบร้อยแล้ว';
$strFields = 'จำนวนฟิลด์';
$strFieldsEmpty = ' จำนวนฟิลด์คือ ว่างเปล่า! ';
$strFieldsEnclosedBy = 'คร่อมฟิลด์ด้วย';
$strFieldsEscapedBy = 'เครื่องหมายสำหรับ escape char';
$strFieldsTerminatedBy = 'จบฟิลด์ด้วย';
$strFixed = 'คงที่';
$strFlushTable = 'ล้างตาราง ("FLUSH")';
$strFormEmpty = 'ค่าในแบบฟอร์มหายไป !';
$strFormat = 'รูปแบบ';
$strFullText = 'ทั้งข้อความ';
$strFunction = 'ฟังก์ชั่น';

$strGenBy = 'สร้างโดย';
$strGenTime = 'เวลาในการสร้าง';
$strGeneralRelationFeat = 'ความสามารถด้านรีเลชันทั่วไป';
$strGo = 'ลงมือ';
$strGrants = 'อนุญาต';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'เปลี่ยนเสร็จแล้ว';
$strHasBeenCreated = 'สร้างเสร็จแล้ว';
$strHaveToShow = 'ต้องเลือกให้แสดงอย่างน้อยหนึ่งคอลัมน์';
$strHome = 'หน้าบ้าน';
$strHomepageOfficial = 'โฮมเพจอย่างเป็นทางการของ phpMyAdmin';
$strHomepageSourceforge = 'หน้าดาวน์โหลด phpMyAdmin ที่ Sourceforge';
$strHost = 'โฮสต์';
$strHostEmpty = 'ชื่อโฮสต์ยังว่างอยู่!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'ถ้าต้องการเรียกดูเฉพาะบางคอลัมน์ ให้ระบุรายชื่อฟิลด์มาด้วย (คั่นแต่ละชื่อด้วยเครื่องหมายลูกน้ำ)';
$strIgnore = 'ไม่สนใจ';
$strInUse = 'ใช้อยู่';
$strIndex = 'ดัชนี';
$strIndexHasBeenDropped = 'โยนดัชนี %s ทิ้งไปเรียบร้อยแล้ว';
$strIndexName = 'ชื่อดัชนี :';
$strIndexType = 'ชนิดของดัชนี :';
$strIndexes = 'ดัชนี';
$strInsecureMySQL = 'ไฟล์เก็บค่ากำหนดของคุณ ได้กำหนดค่า (root with no password) เอาไว้ ซึ่งมันจะถูกใช้เป็น ทะเบียนชื่อปริยาย สำหรับทะเบียนชื่อที่มีสิทธิพิเศษของ MySQL.  เซิร์ฟเวอร์ MySQL ที่ทำงานด้วยค่ากำหนดนี้ จะเปิดโอกาสให้ถูกบุกรุกได้ คุณควรจะแก้ไขรูรั่วอันนี้ทันที เพื่อความปลอดภัย';
$strInsert = 'แทรก';
$strInsertAsNewRow = 'แทรกเป็นแถวใหม่';
$strInsertNewRow = 'แทรกแถวใหม่';
$strInsertTextfiles = 'แทรกข้อมูลจากไฟล์ข้อความเข้าไปในตาราง';
$strInsertedRows = 'แถวที่ถูกแทรก:';
$strInstructions = 'วิธีใช้';
$strInvalidName = '"%s" เป็นคำสงวน นำมาใช้ตั้งชื่อ ฐานข้อมูล/ ตาราง/ฟิลด์ ไม่ได้';

$strKeepPass = 'กรุณาอย่าเปลี่ยนรหัสผ่าน';
$strKeyname = 'ชื่อคีย์';
$strKill = 'ฆ่าทิ้ง';

$strLength = 'ความยาว';
$strLengthSet = 'ความยาว/เซต*';
$strLimitNumRows = 'ระเบียนต่อหน้า';
$strLineFeed = 'ขึ้นบรรทัดใหม่: \\n';
$strLines = 'บรรทัด';
$strLinesTerminatedBy = 'จบแถวด้วย';
$strLinkNotFound = 'ไม่พบลิงก์';
$strLinksTo = 'เชื่อมไปยัง';
$strLocationTextfile = 'เลือกไฟล์ข้อความจาก';
$strLogPassword = 'รหัสผ่าน:';
$strLogUsername = 'ชื่อผู้ใช้:';
$strLogin = 'เข้าสู่ระบบ';
$strLogout = 'ออกจากระบบ';

$strMissingBracket = 'วงเล็บก้ามปู [] ไม่ครบ';
$strModifications = 'บันทึกการแก้ไขเรียบร้อยแล้ว';
$strModify = 'แก้ไข';
$strModifyIndexTopic = 'แก้ไขดัชนี';
$strMoveTable = 'ย้ายตารางไป (database<b>.</b>table):';
$strMoveTableOK = 'ตาราง %s ถูกย้ายไป %s แล้ว';
$strMySQLCharset = 'ชุดตัวอักษร (charset) ของ MySQL';
$strMySQLReloaded = 'เรียก MySQL ขึ้นมาใหม่แล้ว';
$strMySQLSaid = 'MySQL แสดง: ';
$strMySQLServerProcess = 'MySQL %pma_s1% ทำงานอยู่บน %pma_s2% ในชื่อ %pma_s3%';
$strMySQLShowProcess = 'แสดงงานที่ทำอยู่ของ MySQL';
$strMySQLShowStatus = 'แสดงสถานะของ MySQL';
$strMySQLShowVars = 'แสดงตัวแปรระบบของ MySQL';

$strName = 'ชื่อ';
$strNext = 'ต่อไป';
$strNo = 'ไม่';
$strNoDatabases = 'ไม่มีฐานข้อมูล';
$strNoDescription = 'ไม่มีรายละเอียด';
$strNoDropDatabases = 'คำสั่ง "DROP DATABASE" ถูกปิดไว้';
$strNoExplain = 'ไม่ต้องอธิบาย SQL';
$strNoFrames = 'เบราเซอร์ที่<b>ใช้เฟรมได้</b> จะช่วยให้ใช้ phpMyAdmin ได้ง่ายขึ้น';
$strNoIndex = 'ยังไม่ได้กำหนดดัชนีใดๆ!';
$strNoIndexPartsDefined = 'ไม่ได้กำหนดส่วนใดๆ ของดัชนี!';
$strNoModification = 'ไม่มีการเปลี่ยนแปลง';
$strNoPassword = 'ไม่มีรหัสผ่าน';
$strNoPhp = 'ไม่เอาโค้ด PHP';
$strNoPrivileges = 'ไม่มีสิทธิ';
$strNoQuery = 'ไม่มีคำค้น SQL!';
$strNoRights = 'คุณไม่มีสิทธิที่จะเข้ามาตรงนี้!';
$strNoTablesFound = 'ไม่พบตารางใด ๆ ในฐานข้อมูล';
$strNoUsersFound = 'ไม่พบผู้ใช้ใดๆ.';
$strNoValidateSQL = 'ไม่ต้องตรวจสอบ SQL';
$strNone = 'ไม่มี';
$strNotNumber = 'ค่านี้ไม่ใช่ตัวเลข!';
$strNotOK = 'ไม่ตกลง';
$strNotSet = 'ไม่พบตาราง <b>%s</b> ใน %s';
$strNotValidNumber = ' ไม่ใช่หมายเลขแถวที่ถูกต้อง!';
$strNull = 'ว่างเปล่า (null)';
$strNumSearchResultsInTable = 'พบ %s ผลลัพธ์ที่ตรงในตาราง <i>%s</i>';
$strNumSearchResultsTotal = '<b>รวม:</b> <i>%s</i> ผลลัพธ์ที่ตรง';

$strOK = 'ตกลง';
$strOftenQuotation = 'โดยปกติจะเป็นเครื่องหมายอัญประกาศ (เครื่องหมายคำพูด)<br />"เท่าที่จำเป็น" หมายถึงให้ใส่เครื่องหมายคร่อมเฉพาะกับฟิลด์ชนิด char และ varchar เท่านั้น';
$strOperations = 'กระบวนการ';
$strOptimizeTable = 'ปรับแต่งตาราง';
$strOptionalControls = 'กำหนดว่าจะเขียนหรืออ่านตัวอักขระพิเศษ อย่างไร';
$strOptionally = 'เท่าที่จำเป็น';
$strOptions = 'ตัวเลือก';
$strOr = 'หรือ';
$strOverhead = 'เกินความจำเป็น';

$strPHPVersion = 'รุ่นของ PHP';
$strPageNumber = 'หมายเลขหน้า:';
$strPartialText = 'ข้อความบางส่วน';
$strPassword = 'รหัสผ่าน';
$strPasswordEmpty = 'รหัสผ่านยังว่างอยู่!';
$strPasswordNotSame = 'รหัสผ่านไม่ตรงกัน!';
$strPdfDbSchema = 'schema ของฐานข้อมูล "%s" - หน้า %s';
$strPdfInvalidPageNum = 'ยังไม่ได้กำหนดเลขหน้าของ PDF!';
$strPdfInvalidTblName = 'ไม่มีตาราง "%s"!';
$strPdfNoTables = 'ไม่มีตาราง';
$strPhp = 'สร้างโค้ด PHP';
$strPmaDocumentation = 'เอกสารการใช้ phpMyAdmin';
$strPmaUriError = '<b>ต้อง</b>กำหนดค่า <tt>$cfg[\'PmaAbsoluteUri\']</tt> ในไฟล์คอนฟิกูเรชั่นเสียก่อน';
$strPos1 = 'จุดเริ่มต้น';
$strPrevious = 'ก่อนหน้า';
$strPrimary = 'Primary';
$strPrimaryKey = 'Primary key';
$strPrimaryKeyHasBeenDropped = 'โยนไพรมารีคีย์ทิ้งไปเรียบ ร้อยแล้ว';
$strPrimaryKeyName = 'ชื่อของไพรมารีคีย์จะต้องเป็น... PRIMARY!';
$strPrimaryKeyWarning = '(ชื่อของไพรมารีคีย์<b>จะต้องเป็น</b> "PRIMARY" เท่านั้น!)';
$strPrintView = 'แสดง';
$strPrivileges = 'สิทธิ';
$strProperties = 'คุณสมบัติ';

$strQBE = 'คำค้นจากตัวอย่าง';
$strQBEDel = 'ลบ';
$strQBEIns = 'เพิ่ม';
$strQueryOnDb = 'คำค้นบนฐานข้อมูล <b>%s</b>:';

$strReType = 'พิมพ์ใหม่';
$strRecords = 'ระเบียน';
$strReferentialIntegrity = 'ตรวจสอบความสมบูรณ์ของการอ้างถึง:';
$strRelationNotWorking = 'ความสามารถเพิ่มเติมที่อนุญาตให้ใช้งาน linked Tables ได้ ได้ถูกระงับเอาไว้ ด้วยเหตุผลตามที่แจ้งไว้ใน %shere%s';
$strRelationView = 'มุมมองรีเลชัน';
$strReloadFailed = 'รีโหลด MySQL ใหม่ไม่สำเร็จ';
$strReloadMySQL = 'รีโหลด MySQL ใหม่';
$strRememberReload = 'อย่าลืมรีโหลดเซิร์ฟเวอร์ใหม่อีกครั้ง';
$strRenameTable = 'เปลี่ยนชื่อตารางเป็น';
$strRenameTableOK = 'ตาราง %s ได้ถูกเปลี่ยนชื่อเป็น %s';
$strRepairTable = 'ซ่อมแซมตาราง';
$strReplace = 'เขียนทับ';
$strReplaceTable = 'เขียนทับด้วยข้อมูลจากไฟล์';
$strReset = 'เริ่มใหม่';
$strRevoke = 'เพิกถอน';
$strRevokeGrant = 'เพิกถอนการอนุญาต';
$strRevokeGrantMessage = 'คุณได้เพิกถอนการอนุญาตของ %s';
$strRevokeMessage = 'คุณได้เพิกถอนสิทธิของ %s';
$strRevokePriv = 'เพิกถอนสิทธิ';
$strRowLength = 'ความยาวแถว';
$strRowSize = ' ขนาดแถว ';
$strRows = 'แถว';
$strRowsFrom = 'แถว เริ่มจากแถวที่';
$strRowsModeHorizontal = 'แนวนอน';
$strRowsModeOptions = 'อยู่ใน %s และซ้ำหัวแถวทุกๆ %s เซลล์';
$strRowsModeVertical = 'แนวตั้ง';
$strRowsStatistic = 'สถิติของแถว';
$strRunQuery = 'ประมวลผลคำค้น';
$strRunSQLQuery = 'ประมวลผลคำค้นบนฐานข้อมูล %s';
$strRunning = 'ทำงานอยู่บน %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'อาจจะมีการเปลี่ยนแปลงบางอย่างที่คุณพบว่ามันเป็นข้อผิดพลาดของ SQL parser. กรุณาตรวจสอบคำค้นของคุณให้ถี่ถ้วน โดยเฉพาะการเปิด/ปิดเครื่องหมายคำพูด (quotes) ให้ถูกต้อง. อีกสาเหตุหนึ่งที่เป็นไปได้ของข้อผิดพลาดคือ คุณอาจจะอัพโหลดไฟล์ไบนารีข้างนอกช่วงของเครื่องหมายคำพูด. คุณสามารถที่จะลองคำค้นของคุณที่คอมมานด์ไลน์ของ MySQL ซึ่งคุณอาจจะพบข้อผิดพลาดบางอย่างในนั้น. หาก MySQL server ได้แจ้งข้อผิดพลาดมาด้านล่างนี้ ให้ลองอ่านดู มันอาจจะช่วยให้คุณวินิจฉัยปัญหาได้ดีขึ้น. ถ้าคุณยังพบปัญหากับ parser ใน phpMyAdmin อยู่ แต่ไม่พบปัญหากับ parser ใน command line, ให้ลองลดความยาวของคำค้น SQL ลง จนกระทั่งเหลือคำค้น SQL เดี่ยวๆ ที่ยังทำให้เกิดปัญหาอยู่อีก, แล้วแจ้งข้อผิดพลาดดังกล่าวมาที่เรา ส่งมันมาพร้อมกับตัวข้อมูลที่คุณค้น ซึ่งได้จากส่วนของ CUT ด้านล่าง.';
$strSQLParserUserError = 'อาจจะมีข้อผิดพลาดบางอย่างในคำค้น SQL ของคุณ. หาก MySQL server ได้แจ้งข้อผิดพลาดมาด้านล่างนี้ ให้ลองอ่านดู มันอาจจะช่วยให้คุณวินิจฉัยปัญหาได้ดีขึ้น';
$strSQLQuery = 'คำค้น SQL';
$strSQLResult = 'ผลลัพธ์ SQL';
$strSQPBugInvalidIdentifer = 'ชื่อตัวแปรไม่ถูกต้อง';
$strSQPBugUnclosedQuote = 'ไม่ได้ปิดเครื่องหมายคำพูด';
$strSQPBugUnknownPunctuation = 'มีเครื่องหมายวรรคตอนที่ไม่รู้จัก';
$strSave = 'บันทึก';
$strScaleFactorSmall = 'อัตราย่อน้อยเกินไปที่จะจัดให้ schema อยู่ในหน้าเดียว';
$strSearch = 'ค้นหา';
$strSearchFormTitle = 'ค้นหาในฐานข้อมูล';
$strSearchInTables = 'ในตาราง:';
$strSearchNeedle = 'คำหรือค่าที่ต้องการค้นหา (wildcard: "%"):';
$strSearchOption1 = 'อย่างน้อยหนึ่งคำ';
$strSearchOption2 = 'ทุกคำ';
$strSearchOption3 = 'เหมือนทั้งวลี';
$strSearchOption4 = 'ค้นแบบ regular expression';
$strSearchResultsFor = 'ผลการค้นหา "<i>%s</i>" %s:';
$strSearchType = 'ค้น:';
$strSelect = 'เลือก';
$strSelectADb = 'โปรดเลือกฐานข้อมูล';
$strSelectAll = 'เลือกทั้งหมด';
$strSelectFields = 'เลือกฟิลด์ (อย่างน้อยหนึ่งฟิลด์):';
$strSelectNumRows = 'ในคำค้น';
$strSelectTables = 'เลือกตาราง';
$strSend = 'ส่งมาเป็นไฟล์';
$strServerChoice = 'ตัวเลือกเซิร์ฟเวอร์';
$strServerVersion = 'รุ่นของเซิร์ฟเวอร์';
$strSetEnumVal = 'ถ้าชนิดของฟิลด์เป็น "enum" หรือ "set" โปรดใส่ค่าตามรูปแบบ: \'a\',\'b\',\'c\'...<br />ถ้าต้องการใส่เครื่องหมาย backslash ("\\") หรือ อัญประกาศเดี่ยว ("\'") เข้าไปในค่าเหล่านั้น ให้ใส่เครื่องหมาย backslash นำหน้า (ตัวอย่าง: \'\\\\xyz\' or \'a\\\'b\')';
$strShow = 'แสดง';
$strShowAll = 'แสดงทั้งหมด';
$strShowColor = 'แสดงสี';
$strShowCols = 'แสดงคอลัมน์';
$strShowGrid = 'แสดงกริด';
$strShowPHPInfo = 'แสดงข้อมูลของ PHP';
$strShowTableDimension = 'แสดงมิติของตาราง';
$strShowTables = 'แสดงตาราง';
$strShowThisQuery = ' แสดงคำค้นนี้อีกที ';
$strShowingRecords = 'แสดงระเบียนที่ ';
$strSingly = '(เดี่ยว)';
$strSize = 'ขนาด';
$strSort = 'เรียง';
$strSpaceUsage = 'เนื้อที่ที่ใช้';
$strSplitWordsWithSpace = 'คำถูกแบ่งด้วยช่องว่าง (" ").';
$strStatement = 'คำสั่ง';
$strStrucCSV = 'ข้อมูล CSV';
$strStrucData = 'ทั้งโครงสร้างและข้อมูล';
$strStrucDrop = 'เพิ่มคำสั่ง \'drop table\'';
$strStrucExcelCSV = 'ข้อมูล CSV สำหรับไมโครซอฟต์เอ็กเซล';
$strStrucOnly = 'เฉพาะโครงสร้าง';
$strStructPropose = 'เสนอโครงสร้างตาราง';
$strStructure = 'โครงสร้าง';
$strSubmit = 'ส่ง';
$strSuccess = 'ทำคำค้นเสร็จเรียบร้อยแล้ว';
$strSum = 'ผลรวม';

$strTable = 'ตาราง ';
$strTableComments = 'หมายเหตุของตาราง';
$strTableEmpty = 'ชื่อตารางยังว่างอยู่!';
$strTableHasBeenDropped = 'โยนตาราง %s ทิ้งไปเรียบร้อย แล้ว';
$strTableHasBeenEmptied = 'ลบข้อมูลในตาราง %s เรียบร้อย แล้ว';
$strTableHasBeenFlushed = 'ล้างตาราง %s เรียบร้อยแล้ว';
$strTableMaintenance = 'การดูแลรักษาตาราง';
$strTableStructure = 'โครงสร้างตาราง';
$strTableType = 'ชนิดตาราง';
$strTables = '%s ตาราง';
$strTextAreaLength = ' เนื่องจากความยาวของมัน <br />ฟิลด์นี้ ไม่อาจแก้ไขได้ ';
$strTheContent = 'ได้แทรกข้อมูลจากไฟล์ของคุณเรียบร้อยแล้ว';
$strTheContents = 'สำหรับแถวที่มีไพรมารีคีย์หรือ unique key เหมือนกัน เนื้อหาจากไฟล์จะแทนที่เนื้อหาเดิมในตาราง';
$strTheTerminator = 'จุดสิ้นสุดของฟิลด์';
$strTotal = 'ทั้งหมด';
$strType = 'ชนิด';

$strUncheckAll = 'ไม่เลือกเลย';
$strUnique = 'เอกลักษณ์';
$strUnselectAll = 'ไม่เลือกเลย';
$strUpdatePrivMessage = 'คุณได้ปรับปรุงสิทธิสำหรับ %s แล้ว';
$strUpdateProfile = 'ปรับปรุงโพรไฟล์:';
$strUpdateProfileMessage = 'ปรับปรุงโพรไฟล์เรียบร้อยแล้ว';
$strUpdateQuery = 'ปรับปรุงคำค้น';
$strUsage = 'ใช้งาน';
$strUseBackquotes = 'ใส่ \'backqoute\' ให้กับชื่อตารางและฟิลด์';
$strUseTables = 'ใช้ตาราง';
$strUser = 'ผู้ใช้';
$strUserEmpty = 'ชื่อผู้ใช้ยังว่างอยู่!';
$strUserName = 'ชื่อผู้ใช้';
$strUsers = 'ผู้ใช้';

$strValidateSQL = 'ตรวจสอบ SQL';
$strValidatorError = 'ไม่สามารถเริ่มตัวตรวจสอบ SQL ได้. กรุณาตรวจสอบว่า คุณได้ติดตั้ง php extensions ที่จำเป็น ดังที่อธิบายไว้ใน %sdocumentation%s เรียบร้อยแล้ว';
$strValue = 'ค่า';
$strViewDump = 'ดูโครงสร้างของตาราง';
$strViewDumpDB = 'ดูโครงสร้างของฐานข้อมูล';

$strWebServerUploadDirectory = 'ไดเรกทอรีสำหรับอัพโหลด ที่เวบเซิร์ฟเวอร์';
$strWebServerUploadDirectoryError = 'ไม่สามารถใช้งาน ไดเรกทอรีที่ตั้งไว้สำหรับอัพโหลดได้';
$strWelcome = '%s ยินดีต้อนรับ';
$strWithChecked = 'ทำกับที่เลือก:';
$strWrongUser = 'อนุญาตให้เข้าใช้ไม่ได้ ชื่อผู้ใช้หรือรหัสผ่านผิด';

$strYes = 'ใช่';

$strZip = '"ถูกบีบอัดอยู่ (zip)"';

$strServer = 'Server %s';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
?>
