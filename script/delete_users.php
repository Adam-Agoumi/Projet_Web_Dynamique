





public void deleteUser(String nameToDelete) {
        try {
            Connection connection = DriverManager.getConnection(url, username, password);
            PreparedStatement statement = connection.prepareStatement
                    ("DELETE FROM users WHERE UserName = ?");
            statement.setString(1, nameToDelete);
            statement.execute();

        } catch (SQLException e) {
            e.printStackTrace();
        }

    }