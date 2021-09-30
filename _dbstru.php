<?php

$_dbstru = array(

'Opers_refs_summ' =>
 "User_ID int(11) NOT NULL,
  Ref_ID int(11) NOT NULL,
  Sum decimal(13,6) default 0,
  SumUSD decimal(13,6) default 0,
  SumEUR decimal(13,6) default 0,
  SumRUB decimal(13,6) default 0,
  SumBTC decimal(13,6) default 0,
  SumETH decimal(13,6) default 0,
  SumXRP decimal(13,6) default 0,
  PRIMARY KEY (User_ID,Ref_ID),
  KEY User_ID (User_ID),
  KEY Ref_ID (Ref_ID)",

'Admin_menu' =>
 "admin_id int(11) NOT NULL,
  url varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  date_add datetime NOT NULL,
  PRIMARY KEY (admin_id,url),
  KEY admin_id (admin_id)",

'Opers_queue' =>
 "order_id int(11) NOT NULL,
  type varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (order_id,type),
  KEY order_id (order_id),
  KEY type (type)",

'Msg_queue' =>
 "id int(11) NOT NULL AUTO_INCREMENT,
  mail varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  section varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  consts varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  lang varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  fname varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  fromname varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  feed tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (id),
  KEY mail (mail),
  KEY section (section),
  KEY consts (consts),
  KEY lang (lang),
  KEY fname (fname),
  KEY from1 (fromname),
  KEY feed (feed)",

'Cfg' =>
 "Module varchar(60) NOT NULL,
  Prop varchar(20) NOT NULL,
  Val text NOT NULL,
  UNIQUE KEY  (Module, Prop)",

'Hist' =>
 "hID int(10) NOT NULL auto_increment,
  hTS bigint(14) NOT NULL,
  hOper varchar(10) NOT NULL,
  huID int(10) default 0,
  hIP varchar(15),
  hcCurrID varchar(10) NOT NULL,
  hSum decimal(13,6) default 0.0,
  hParams text,
  hTag int(10) default 0,
  hMemo varchar(60),
  hoID int(10) default 0,
  PRIMARY KEY  (hID),
  KEY HTS (hTS),
  KEY HTAG (hTag,hMemo)",

'Users' =>
 "uID int(10) NOT NULL auto_increment,
  uGroup varchar(40) NOT NULL,
  uLogin varchar(40) NOT NULL,
  uPass varchar(32) NOT NULL,
  uPass2 varchar(32) NOT NULL,
  uMail varchar(60) NOT NULL,
  uPIN varchar(32) default '',
  uState int(1) default 0,
  uBTS bigint(14),
  uLevel int(2) default 0,
  uLang varchar(10) default 'en',
  uMode varchar(10) default '',
  uTheme varchar(10) default '',
  uRef int(10) default 0,
  uBal decimal(13,6) default 0,
  uBalUSD decimal(13,6) default 0,
  uBalEUR decimal(13,6) default 0,
  uBalRUB decimal(13,6) default 0,
  uBalBTC decimal(13,6) default 0,
  uBalETH decimal(13,6) default 0,
  uBalXRP decimal(13,6) default 0,
  uLock decimal(13,6) default 0,
  uLockUSD decimal(13,6) default 0,
  uLockEUR decimal(13,6) default 0,
  uLockRUB decimal(13,6) default 0,
  uLockBTC decimal(13,6) default 0,
  uLockETH decimal(13,6) default 0,
  uLockXRP decimal(13,6) default 0,
  uOut decimal(13,6) default 0,
  uOutUSD decimal(13,6) default 0,
  uOutEUR decimal(13,6) default 0,
  uOutRUB decimal(13,6) default 0,
  uOutBTC decimal(13,6) default 0,
  uOutETH decimal(13,6) default 0,
  uOutXRP decimal(13,6) default 0,
  uWDDisable int(1) default 0,
  uLTS bigint(14),
  uLIP varchar(15),
  uLSess varchar(32),
  uPTS bigint(14) default 0,
  uBFC int(1) default 0,
  GraphMainOptions TEXT NOT NULL,
  GraphCommonOptions TEXT NOT NULL,
  uSumDepo decimal(13,6) default 0,
  uSumDepoUSD decimal(13,6) default 0,
  uSumDepoEUR decimal(13,6) default 0,
  uSumDepoRUB decimal(13,6) default 0,
  uSumDepoBTC decimal(13,6) default 0,
  uSumDepoETH decimal(13,6) default 0,
  uSumDepoXRP decimal(13,6) default 0,
  PRIMARY KEY  (uID),
  UNIQUE KEY ULOGIN (uLogin),
  UNIQUE KEY UMAIL (uMail),
  KEY UREF (uRef),
  KEY ULTS (uLTS)",

'AddInfo' =>
 "auID int(10) NOT NULL,
  aName varchar(60) NOT NULL,
  aCTS bigint(14) NOT NULL,
  aCIP varchar(15) NOT NULL,
  aSQuestion varchar(60),
  aSAnswer varchar(32),
  aPerc text,
  aDPerc text,
  aPPerc text,
  aIPSec int(1) default 0,
  aSessIP int(1) default 0,
  aSessUniq int(1) default 0,
  aTimeOut int(3) default 0,
  aOIDs text NOT NULL,
  aTZ int(4) default 0,
  aBD bigint(14) NOT NULL,
  aCountry varchar(40) NOT NULL,
  aCity varchar(60) NOT NULL,
  aTel varchar(20) NOT NULL,
  aAvatar int(1) default 0,
  aDefCurr int(2) default 0,
  aNoMail int(1) default 0,
  aGA varchar(100),
  aNeedReConfig int(1) default 1,
  PRIMARY KEY  (auID)",

'News' =>
 "nID int(5) NOT NULL auto_increment,
  nDBegin bigint(14) NOT NULL,
  nDEnd bigint(14) NOT NULL,
  nTS bigint(14) NOT NULL,
  nTopic varchar(1000) NOT NULL,
  nAnnounce text NOT NULL,
  nText text NOT NULL,
  nAttn int(1),
  PRIMARY KEY  (nID)",

'Currs' => // CID - Currency ID (see psys.php) -> Name, Curr
 "cID int(2) NOT NULL auto_increment,
  cDisabled int(1) default 1,
  cHidden int(1) default 0,
  cCID varchar(4) NOT NULL,
  cCurrID varchar(10) NOT NULL,
  cName varchar(120) NOT NULL,
  cCurr varchar(60) NOT NULL,
  cParams text,
  cParamsSCI text,
  cParamsAPI text,
  cNumDec int(1) default 0,
  cCASHINMode int(1) default 1,
  cCASHINMin decimal(13,6) default 0.00,
  cCASHINMax decimal(13,6) default 0.00,
  cCASHINInt int(1) default 0,
  cCASHINComis decimal(6,2) default 0.00,
  cCASHINComisMin decimal(9,3) default 0.000,
  cCASHINComisMax decimal(9,3) default 0.000,
  cCASHOUTMode int(1) default 0,
  cCASHOUTMin decimal(13,6) default 0.00,
  cCASHOUTMax decimal(13,6) default 0.00,
  cCASHOUTInt int(1) default 0,
  cCASHOUTComis decimal(6,2) default 0.00,
  cCASHOUTComisMin decimal(9,3) default 0.000,
  cCASHOUTComisMax decimal(9,3) default 0.000,
  cCASHOUTLimitPer int(3) default 0,
  cCASHOUTLimit decimal(13,6) default 0.00,
  cTRMode int(1) default 0,
  cTRMin decimal(13,6) default 0.00,
  cTRMax decimal(13,6) default 0.00,
  cTRInt int(1) default 0,
  cTRComis decimal(6,2) default 0.00,
  cTRComisMin decimal(9,3) default 0.000,
  cTRComisMax decimal(9,3) default 0.000,
  cMTS bigint(14),
  cBalMin decimal(13,6) default 0,
  cBal decimal(13,6) default 0,
  cBalTS bigint(14),
  PRIMARY KEY  (cID)", // cParams - IN (public) wallet, cParams2 - OUT (private) wallet

'Wallets' =>
 "wcID int(2) NOT NULL,
  wuID int(10) NOT NULL,
  wParams text,
  wMTS bigint(14),
  PRIMARY KEY  (wcID,wuID)",
  
'Opers' =>
 "oID int(10) NOT NULL auto_increment,
  oCTS bigint(14),
  oATS bigint(14),
  ouID int(10),
  oOper varchar(10),
  ocID int(2),
  ocCurrID varchar(10) NOT NULL,
  ocCurrID2 varchar(10) NOT NULL,
  oSum decimal(13,6) default 0.0,
  oSum2 decimal(13,6) default 0.0,
  oSumReal decimal(13,6) NOT NULL,
  oComis decimal(13,6) default 0.0,
  oParams text,
  oParams2 text,
  oBatch varchar(40),
  oTag varchar(60),
  oTS bigint(14),
  oState int(1) default 0,
  oPTS bigint(14) NOT NULL,
  oMemo varchar(120),
  oNTS bigint(14),
  PRIMARY KEY  (oID),
  KEY OBATCH (ocID,oBatch),
  KEY OTAG (oTag),
  KEY OCCURRID (ocCurrID)", // oParams2 - additional parameters (for ex. deposit)
  
'Pages'=>
 "pID int(3) NOT NULL auto_increment,
  pHidden int(1) default 0,
  pDirect int(1) default 0,
  pTopic varchar(120),
  pText text,
  PRIMARY KEY  (pID)",

'Calend'=>
        "cID int(6) NOT NULL auto_increment,
         cTS bigint(14) NOT NULL,
         cYear int(4),
         cMonth int(2),
         cDay int(2),
         cType int(1),
         cPerc decimal(7,2) default 0.00,
         PRIMARY KEY  (cID),
         KEY CTS (cTS),
         KEY CDAY (cYear,cMonth,cDay)",
  
/*'Banners' =>
 "rID int(10) NOT NULL auto_increment,
  rDisabled int(1) default 1,
  rDBegin bigint(14) NOT NULL,
  rDEnd bigint(14) NOT NULL,
  rPlace int(4),
  rName varchar(120),
  rPictURL varchar(500),
  rGoURL varchar(500),
  rWeeks int(3),
  PRIMARY KEY  (rID)",*/
  
'Plans' =>
 "pID int(3) NOT NULL auto_increment,
  pHidden int(1) default 0,
  pNoCalc int(1) default 0,
  pGroup int(2) default 0,
  pGroupReq int(2) default 0,
  pMaxCount int(3) default 0,
  pName varchar(400) NOT NULL,
  pDescr varchar(1000) NOT NULL,
  pMin decimal(13,6) default 1.00,
  pMax decimal(13,6) default 0.00,
  pDays int(5) default 0,
  pWDays int(1) default 0,
  pPerc decimal(7,2) default 0.00,
  pCompndMin decimal(7,2) default 0.00,
  pCompndMax decimal(7,2) default 0.00,
  pPer int(6) default 0,
  pNPer int(5) NOT NULL,
  pReturn decimal(7,2) default 100.00,
  pMPer int(5) NOT NULL,
  pClPer int(5) NOT NULL,
  pClComis decimal(7,2) default 100.00,
  pBonus decimal(7,2) default 0.00,
  pEnAdd int(1) default 0,
  pMinAdd decimal(13,6) default 1.00,
  pDPerc text,
  pPPerc text,
  pPClndr int(1) default 0,
  pBonusDay decimal(7,2) NOT NULL,
  pmndID int(10) default 0,
  pmndIDdone int(10) default 0,
  pmnPerc decimal(7,2) default 0,
  PRIMARY KEY  (pID)",

'Deps' =>
 "dID int(10) NOT NULL auto_increment,
  duID int(10) NOT NULL,
  dState int(1) default 0,
  dpID int(3) NOT NULL,
  dCTS bigint(14) NOT NULL,
  dETS bigint(14) NOT NULL,
  dcCurrID varchar(10) NOT NULL,
  dZ0 decimal(13,6) default 0.00,
  dZD decimal(13,6) default 0.00,
  dZDReal decimal(13,6) default 0.00,
  dCompnd decimal(7,2) default 0.00,
  dZC decimal(13,6) default 0.00,
  dNTS bigint(14) NOT NULL,
  dLTS bigint(14) NOT NULL,
  dZP decimal(13,6) default 0.00,
  dNPer int(5) default 0,
  dCoef varchar(400) default '',
  PRIMARY KEY  (dID),
  KEY AUID (duID),
  KEY ACTS (dCTS),
  KEY DCCURRID (dcCurrID)",

'Review' =>
 "oID int(10) NOT NULL auto_increment,
  oTS bigint(14) NOT NULL,
  ouID int(10) NOT NULL,
  oText text,
  oOrder int(3) default 0,
  oState int(1) default 0,
  PRIMARY KEY  (oID)",

'FAQ' =>
 "fID int(5) NOT NULL auto_increment,
  fHidden int(1) default 0,
  fCTS bigint(14) NOT NULL,
  fCat varchar(100) NOT NULL,
  fOrder int(3) NOT NULL,
  fQuestion varchar(2000) NOT NULL,
  fAnswer text NOT NULL,
  PRIMARY KEY  (fID)",

'Queue' =>
 "qID int(10) NOT NULL auto_increment,
  quID int(10) NOT NULL,
  qTS bigint(14) default NULL,
  qFrom varchar(11) default '',
  qTo varchar(30) default '',
  qaID int(10) NOT NULL,
  qText varchar(1600) default '',
  qxID int(10) NOT NULL,
  qTranslit int(1) default 0,
  qTest int(1) default 1,
  qKey varchar(32) default '',
  qState int(1) default 0,
  qSTS bigint(14) default 0,
  qParts int(2) default 0,
  qPrice decimal(13,6) default 0.0,
  qError varchar(100) default '',
  qErrCnt int(1) default 0,
  PRIMARY KEY  (qID),
  KEY QUID (quID),
  KEY QKEY (qKey)",
  
'Tickets' =>
 "tID int(10) NOT NULL auto_increment,
  tuID int(10) NOT NULL,
  tTS bigint(14) default NULL,
  tTID varchar(32) default '',
  tName varchar(60) default '',
  tMail varchar(60) default '',
  tCat varchar(100) default '',
  tTopic varchar(200),
  tText text,
  tPriority int(1),
  tState int(1),
  tLang varchar(10) default 'en',
  tLTS bigint(14),
  PRIMARY KEY  (tID),
  KEY TUID (tuID)",
  
'TMsg' =>
 "mID int(10) NOT NULL auto_increment,
  mtID int(10) NOT NULL,
  muID int(10) NOT NULL,
  mTS bigint(14) default NULL,
  mText text NOT NULL,
  mRTS bigint(14),
  PRIMARY KEY  (mID),
  KEY MTID (mtID)",

'Msg' =>
 "mID int(10) NOT NULL auto_increment,
  muID int(10) NOT NULL,
  mTS bigint(14) default NULL,
  mMail varchar(60) default '',
  mAttn int(1),
  mTopic varchar(120) default NULL,
  mText text NOT NULL,
  mLang varchar(10) default 'en',
  mGroup int(10) default 0,
  mTo text NOT NULL,
  mToCnt int(6) NOT NULL,
  PRIMARY KEY  (mID),
  KEY MUID (muID)",

'MBox' =>
 "bID int(10) NOT NULL auto_increment,
  buID int(10) NOT NULL,
  bmID int(10) NOT NULL,
  bRe int(10) default 0,
  buID2 int(10) NOT NULL,
  bMail varchar(60) default '',
  bRTS bigint(14) default NULL,
  bDeleted int(1) default 0,
  PRIMARY KEY  (bID),
  KEY BUID (buID),
  KEY BUID2 (buID2),
  KEY BMID (bmID)"

);