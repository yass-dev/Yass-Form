<?php

	if(isset($_POST['email']) && isset($_POST['password']))
	{
		if(!empty($_POST['email']) && !empty($_POST['password']))
		{
			if(strpos($_POST['email'], "@") > 0)
			{
				if(verifyEmail($_POST['email']))
				{
					if($_POST['password'] == "password")
					{
						echo "success";
					}
					else
					{
						echo "Wrong password for email " . $_POST['email'] . " !";
					}
				}
				else
				{
					exit("Your email is not valid.");
				}
			}
			else if(is_numeric($_POST['email']))
			{
				if($_POST['password'] == "password")
				{
					echo "success";
				}
				else
				{
					echo "Wrong password for phone " . $_POST['email'] . " !";
				}
			}
		}
		else
		{
			exit("Your name is not valid.");
		}
	}
	else
	{
		exit("Data is missing");
	}

function verifyEmail($email)
{
	if(sizeof(explode('@', $email)) == 2 && sizeof(explode('.', $email)) == 2 && !empty(explode('@', $email)[0]) && !empty(explode('@', $email)[1]) && !empty(explode('.', $email)[0]) && !empty(explode('.', $email)[1]) && !empty(explode('.', explode('@', $email)[1])[0]))
		return true;
	else
		return false;

	$userName = explode("@", $email);
}
?>