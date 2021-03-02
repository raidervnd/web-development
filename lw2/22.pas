PROGRAM SarahRevere(INPUT, OUTPUT);
USES 
  GPC;
VAR
  QString: STRING;
BEGIN {SarahRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QString := GetEnv('QUERY_STRING');
  IF QString = 'lanterns=1'
  THEN
    WRITELN('The British is coming by land.')
  ELSE
    IF QString = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say')
END. {SarahRevere}
