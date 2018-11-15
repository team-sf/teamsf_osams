<?php


class Controller extends Database
{
	public function create($table, $columns, $values)
	{		
		$query = "INSERT INTO ".$table." (";
		$ctr1 = count($columns);
		$ctr2 = count($values);
		for($i=0; $i<=$ctr1-1; $i++)
		{
			if($i != $ctr1-1)
			{
				$query .= $columns[$i].", ";
			}
			else
			{
				$query .= $columns[$i].") VALUES (";

				for ($n=0; $n<=$ctr2-1 ; $n++) { 
					if ($n != $ctr2-1) 
					{
						$query .= "'".$values[$n]."'".", ";	
					}
					else
					{
						$query .= "'".$values[$n]."'".");";
					}
				}
			}
		}
		return $this->connect()->query($query);
	}

	public function read($table, $columns, $condition)
	{
		$query = "SELECT ";
		$ctr1 = count($columns);

		if($id == "0")
		{
			for($i=0; $i<=$ctr1-1; $i++)
			{
				if($i != $ctr1-1)
				{
					$query .= $columns[$i].", ";
				}
				else
				{
					$query .= $columns[$i]." FROM ".$table;
				}
			}
		}
		else
		{
			for($i=0; $i<=$ctr1-1; $i++)
			{
				if($i != $ctr1-1)
				{
					$query .= $columns[$i].", ";
				}
				else
				{
					$query .= $columns[$i]." FROM ".$table." WHERE ".$condition;
				}
			}
		}

		$result = $this->connect()->query($query);

		if($result->num_rows > 0)
		{
			while($fetch = $result->fetch_assoc())
			{
				$res[] = $fetch;
			}
			return $res;
		}
		else
		{
			return 0;
		}
	}

	public function update($table, $columns, $values, $id)
	{
		$query = "UPDATE ".$table." SET ";
		$ctr1 = count($columns);
		$ctr2 = count($values);
		for($i=0; $i<=$ctr1-1; $i++)
		{
			if($i != $ctr1-1)
			{
				$query .= $columns[$i]." = "."'".$values[$i]."'".', ';
			}
			else
			{
				$query .= $columns[$i]." = "."'".$values[$i]."'".' WHERE id= '.$id;
			}
		}	
		return $this->connect()->query($query);
	}

	public function delete($table, $id)
	{
		$query = "DELETE FROM ".$table." WHERE id = ".$id;
		return $this->connect()->query($query);
	}

}