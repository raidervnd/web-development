PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR  
  QString, FinalStr: STRING;
  IndexS: INTEGER;
BEGIN {GetQueryStringParameter}
  QString := GetEnv('QUERY_STRING');
  IndexS := Pos(Key, QString);
  GetQueryStringParameter := 'not found';
  IF (QString <> '') AND (IndexS <> 0) AND ((QString[IndexS - 1] = '&') OR (IndexS = 1)) AND (QString[IndexS + Length(Key)] = '=')
  THEN {found the parameter}
    BEGIN 
      IndexS := IndexS + Length(Key) + 1; {Index on the value}
      QString := Copy(QString, IndexS, Length(QString));  {Копируем в новую строку начиная с значения}
      IndexS := Pos('&', QString);
      IF IndexS <> 0
      THEN
        FinalStr := Copy(QString, 1, IndexS - 1)
      ELSE
        FinalStr := Copy(QString, 1, Length(QString));
      GetQueryStringParameter :=  FinalStr 
    END
END; {GetQueryStringParameter}
BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}