class CreateSubjects < ActiveRecord::Migration
  def change
    create_table :subjects do |t|
      t.string :name
      t.integer :teacher
      t.integer :classroom

      t.timestamps
    end
  end
end
