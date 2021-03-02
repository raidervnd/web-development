PROGRAM PrintHello(INPUT, OUTPUT);
USES
  GPC;
VAR
  QString, StrName: STRING;
  IndexName, FinderEnding: INTEGER;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QString := GetEnv('QUERY_STRING');
  IndexName := Pos('name=', QString);   
  IF (QString <> '') AND (IndexName <> 0) 
  THEN
    BEGIN
      FinderEnding := Pos('&', QString);
      IF FinderEnding <> 0
      THEN
        StrName := Copy(QString, IndexName + 5, FinderEnding - 1)
      ELSE
        StrName := Copy(QString, IndexName + 5, Length(QString));
      WRITELN('Hello dear, ', StrName, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END. {PrintHello}
