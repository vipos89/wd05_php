<?php

    namespace App\Core;

    use App\Helpers\Debugger;

    class Model
    {
        protected static $tablename = null;
        public static $fillable =[];

        public static function findById($id){
            $table = static::getTableName();
            $sql = "select * from $table where id = :id";
            $connection = DB::getDBConnection();
            $stm = $connection->prepare($sql);
            $stm->execute([
                'id' =>$id
                ]);

            return $stm->fetchObject(static::class );
        }

        public static function getAll(){
            $table = static::getTableName();
            $sql = "select * from $table";
            $connection = DB::getDBConnection();
            $stm = $connection->query($sql);

            return $stm->fetchAll(\PDO::FETCH_CLASS,  static::class);
        }

        protected static function getTableName(){
            if (!static::$tablename){
                $class = explode('\\', static::class);
                $class = strtolower($class[count($class)-1])."s";
                return $class;
            }
            return  static::$tablename;
        }

        public function save(){
            $tableName = static::getTableName();
            $columns = implode(',', static::$fillable);
            $values = array_fill(0, count(static::$fillable), '?');
            $values = implode(',', $values);
            $sql = "insert into $tableName ($columns) values ($values)";

            $connection = DB::getDBConnection();
            $stm = $connection->prepare($sql);
            $attrs = [];
            foreach (static::$fillable as $attr){
                $attrs[] = $this->{$attr};
            }

            $stm->execute($attrs);

            //
        }
    }
